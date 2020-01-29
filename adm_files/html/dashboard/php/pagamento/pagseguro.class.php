<?php
	/**
	 * Author Pedro Henrique Martins Pimenta
	 */

	class PagSeguro {
		private $data;
		private $url;
		private $pageController = "php/pagamento/pagseguro.php"; // Local do arquivo de geração do codigo para compra no PagSeguro
		private $savePedido = "php/pagamento/salvarPedido.php"; // local do arquivo que salva a compra (status aguardando pagamento)
		private $buttonClass = "btn btn-primary col-sm-12"; //Classes para estilização do botão de compra
		private $buttonText = "Pagar"; // Texto do botão de compra
		private $token = "aa2ea291-bd75-4a64-b5ee-0ac119358522c8fa089b480397dfee4738a38d734fb442c9-ae95-4d2a-8265-445bbb8e9da2"; // Token gerado no PagSeguro
		private $email = "trydeveloper70@gmail.com"; // Seu E-mail
		private $sandbox = ""; // Caso esteja em teste insira valor sandbox. / caso de produção deixar vazio
		private $uriProgress = "https://thumbs.gfycat.com/BountifulHarshAmoeba-size_restricted.gif";

		function __construct(){
			//Inicialização de algumas variaveis
			$this->data['token'] = $this->token;
			$this->data['email'] = $this->email;
			$this->data['currency'] = "BRL";
			$this->data['itemId1'] = "1";
			$this->data['itemQuantity1'] = "1";
			$this->data['itemDescription1'] = "Mensalidade do sistema de agendamento de equipamento";
			$this->data['itemAmount1'] = "29.90";
			$this->url = "https://ws.".$this->sandbox."pagseguro.uol.com.br/v2/checkout";
		}

		//Criação da lightbox passando como parametro uma String EX.: "{mesCodigo: 3}"
		function createLightbox($data){
			$html = '<button onclick="submitPagseguro()" class="btn-submit '.$this->buttonClass.'">'.$this->buttonText.'</button>
					</div>

					<form id="comprar" action="https://'.$this->sandbox.'pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">

					<input type="hidden" name="code" id="code" value="" />

					</form>
					<script type="text/javascript" src="https://stc.'.$this->sandbox.'pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
					<script>
						function submitPagseguro(){
							$(".btn-submit").html(\'<img src="'.$this->uriProgress.'" width="30px">\');
							$.post("'.$this->savePedido.'",'.$data.',function(idPedido){
 									$.post("'.$this->pageController.'",{idPedido: idPedido},function(data){
	 									$("#code").val(data);
										$("#comprar").submit();
										$(".btn-submit").html("'.$this->buttonText.'");
								});
							   })							
							}
					</script>';
				return $html;
				
		}

		//Gerar um código de venda
		//Id do pedido deve ser a chave primeria que foi salvo no banco do seu pedido
		function getCode($idPedido){
			$this->data['reference'] = $idPedido;
			
			$this->data = http_build_query($this->data);

			$curl = curl_init($this->url);

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $this->data);
			curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			$xml= curl_exec($curl);

			curl_close($curl);
			$xml = simplexml_load_string($xml);
			return $xml->code;
		}

		//Caso de alteração do estado de pagamento
		// #noficationCode é um codigo que o PagSeguro envia para um arquivo selecionado previamente
		function getNotication($notificationCode){
			$data['token'] = $this->token;
			$data['email'] = $this->email;
			$data = http_build_query($data);
			$this->url = 'https://ws.'.$this->sandbox.'pagseguro.uol.com.br/v3/transactions/notifications/'.$notificationCode.'?'.$data;

			$curl = curl_init($this->url);

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			$xml= curl_exec($curl);

			curl_close($curl);

			$xml = simplexml_load_string($xml);
			$reference = $xml->reference;
			$status = $xml->status;
			if ($status && $reference) {
				return array($reference, $status);
			}
		}

	}
	
?>