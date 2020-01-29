<?php
	/**
	 * Author Pedro Henrique Martins Pimenta
	 */

	class PagSeguro {
		private $data;
		private $url = "https://ws.pagseguro.uol.com.br/v2/checkout";
		private $table = "MENSALIDADE";
		private $tableCampos = array("CODIGO","DIA_PAGO", "USUARIO_CPF", "STATUS");
		private $pageController = "php/pagseguro.php";
		private $buttonClass = "btn btn-primary col-sm-12";
		private $buttonText = "Pagar";
		private $savePedido = "php/salvarPedido.php";

		function __construct(){
			$this->data['token'] = "meu token";
			$this->data['email'] = "pedrohenrique234322@gmail.com";
			$this->data['currency'] = "BRL";
			$this->data['itemId1'] = "1";
			$this->data['itemQuantity1'] = "1";
			$this->data['itemDescription1'] = "Mensalidade de ".date('M');
			$this->data['itemAmount1'] = "29.90";
		}

		function createLightbox(){
			$html = '<button onclick="submitPagseguro()" class="'.$this->buttonClass.'">'.$this->buttonText.'</button>
					</div>

					<form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">

					<input type="hidden" name="code" id="code" value="" />

					</form>
					<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
					<script>
						function submitPagseguro(){
							$.post("'.$this->savePedido.'","",function(idPedido){
 									$.post("'.$this->pageController.'",{idPedido: idPedido},function(data){
 									$("#code").val(data);
									$("#comprar").submit();
								});
							   })							
							}
					</script>';
				return $html;
				
		}

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

			$xml= simplexml_load_string($xml);
			return $xml->code;
		}

	}

?>