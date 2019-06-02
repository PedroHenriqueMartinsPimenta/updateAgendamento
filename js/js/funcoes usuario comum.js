// JavaScript Document
function getData(mesQtd){
		data = new Date();
		var dia = data.getDate();
		var mes = data.getMonth() + 1;
		if(mes < 10){
		mes = "0"+mes;
		}
		if(dia < 10){
			dia = "0"+ dia;
			}
		var ano = data.getYear() +1900;
		var diaSemana = data.getDay();
		diaSemana = parseInt(diaSemana);
		if(diaSemana == 6){
			if((parseInt(dia) + parseInt(diaSemana)) <= mesQtd){
			if((parseInt(dia) + parseInt(diaSemana)) >= 10){
			var diasProximo =  ano + "-" +mes + "-" + (parseInt(dia) + parseInt(diaSemana));
			}else{
				var diasProximo =  ano + "-" +mes + "-0" + (parseInt(dia) + parseInt(diaSemana));
			}
			dia = parseInt(dia) + 2;
			if(dia < 10){
				dia = "0"+dia;
				}
				
				var diaAtual = ano + "-" +mes + "-" + dia;	
				}else{
					var diaAtual = ano + "-" +mes + "-" + dia;
					dia = (parseInt(dia) + parseInt(diaSemana)) - mesQtd;
					mes = parseInt(mes) + 1;
					if (mes >= 10) {
						var diasProximo = ano + "-" +mes + "-0" + dia;
					}else{
						var diasProximo = ano + "-0" +mes + "-0" + dia;
					}
				}		
		}else if(diaSemana == 5){
			if(data.getHours() >= 12){
			if ((parseInt(dia) + parseInt(diaSemana)) > mesQtd) {
				var newMes = parseInt(mes)+1;
				if(newMes < 10){
					newMes = "0" + newMes;
				}
				if( (2 + parseInt(diaSemana)) < 10){
					var diasProximo =  ano + "-" +newMes + "-0" + (2 + parseInt(diaSemana));
				}else{
					var diasProximo =  ano + "-" +newMes + "-" + (2 + parseInt(diaSemana));
				}
			}else{
				var diasProximo =  ano + "-" +mes + "-" + (parseInt(dia) + (2 + parseInt(diaSemana)));
			}
			dia = parseInt(dia);
			if (dia > mesQtd) {
				dia = 2;
				mes++;
			}
			if(dia < 10){
				dia = "0"+dia;
				}
				
				var diaAtual = ano + "-" +mes + "-" + dia;
			}else{
					var diasProximo =  ano + "-" +mes + "-" + dia;
					var diaAtual = ano + "-" +mes + "-" + dia;
			}
		}else if(diaSemana == 0){
			if ((parseInt(dia) + 5) <= mesQtd) {
			if((parseInt(dia) + 5) >= 10){
				var diasProximo =  ano + "-" +mes + "-" + (parseInt(dia) + 5);
			}else{
				var diasProximo =  ano + "-" +mes + "-0" + (parseInt(dia) + 5);
			}
					dia = parseInt(dia) + 1;
					if(dia < 10){
						dia = "0"+dia;
					}
					var diaAtual = ano + "-" +mes + "-" + dia;
				}else{
					var diaAtual = ano + "-" +mes + "-" + dia;
					dia = (parseInt(dia) + 5) - mesQtd;
					mes = parseInt(mes) + 1;
					if (mes >= 10) {
						var diasProximo = ano + "-" +mes + "-0" + dia;
					}else{
						var diasProximo = ano + "-0" +mes + "-0" + dia;
					}
					}			
			}else{
				var diasAmais = 5 - diaSemana;
		var diaAtual = ano + "-" +mes + "-" + dia;
			dia = (parseInt(dia)+ diasAmais);
				if (dia > mesQtd) {
					dia = (parseInt(dia)) - mesQtd;
					mes++;
				if (mes < 10) {
					mes = "0" + mes;
				}
				}
			if(dia < 10){
				dia = "0"+dia;
				}
		var diasProximo =  ano + "-" +mes + "-" + dia;
			}
			
			var dias =[diaAtual, diasProximo];
		return dias;
		}






			
			function desmarcar(){
				var array = [document.getElementById('aula1'),
							document.getElementById('aula2'),
							document.getElementById('aula3'),
							document.getElementById('aula4'),
							document.getElementById('aula5'),
							document.getElementById('aula6'),
							document.getElementById('aula7'),
							document.getElementById('aula8'),
							document.getElementById('aula9')
							]
							for(i = 0; i < array.length;i++){
								var checked = array[i].disabled;
								if(!checked){
								array[i].checked = false;
								}
							}
				}
		function marcar(){
				var array = [document.getElementById('aula1'),
							document.getElementById('aula2'),
							document.getElementById('aula3'),
							document.getElementById('aula4'),
							document.getElementById('aula5'),
							document.getElementById('aula6'),
							document.getElementById('aula7'),
							document.getElementById('aula8'),
							document.getElementById('aula9')
							]
							for(i = 0; i < array.length;i++){
								var checked = array[i].disabled;
								
								if(!checked){
								array[i].checked = true;
								}
							}
				}
				
				
	
			
	function equipamentoHasAulas(arrayID, arrayCODIGO){
		for(var i = 0; i < arrayID.length; i++ ){
				var checked = document.getElementById(arrayID[i]).checked;
				if(checked){
					pesquisarAulas(arrayCODIGO[i]);
				}
			}
		}
		
		function vereficarAgendamento(table, turmas, equii){
			for(var i = 1; i <= 9; i++){
				var checked = document.getElementById('aula'+i).checked;
				if(checked){
					var sala = "";
					for(var s = 0; s < turmas.length; s++){
						var test = document.getElementById('turma'+turmas[s]).checked;
						if(test){
							sala = document.getElementById('leg'+turmas[s]).innerHTML;
							}
						}
					for(var a = 0; a < equii.length; a++){
						
						var equi = document.getElementById('equi'+equii[a]).checked;
						
						if(equi){
							var equipamento = document.getElementById('descricao'+equii[a]).innerHTML;
							table+="<tr><td>"+i+"º Aula</td><td>"+equipamento+"</td><td>"+sala+"</td></tr>";
							$('.tableConfirm').html(table);
							}
						}
					}
				}
			}
			
			function efetuarAgendamento(aula, equipamento, sala, data, cpf, efetuado, arrayEquipamentos, arrayTurmas){
					for(var i = 0; i < arrayEquipamentos.length; i++){
				var checked = document.getElementById('equi'+arrayEquipamentos[i]).checked;
				if(checked){
					equipamento = arrayEquipamentos[i];
					for(var a = 1; a <= 9;a++){
						var checkedAula = document.getElementById('aula'+a).checked;
						if(checkedAula){
							aula = a;
							for(var t = 0; t < arrayTurmas.length;t++){
									
								var checkedTurma = document.getElementById('turma'+arrayTurmas[t]*1).checked;

								if(checkedTurma){
									sala = arrayTurmas[t];
									data = document.getElementById('dias').value;
									var dat = new Date();
									var data_agenda = (dat.getYear()+1900)+"-"+(dat.getMonth()+1)+"-"+ dat.getDate()+
									" "+ dat.getHours()+":"+dat.getMinutes()+":"+dat.getSeconds();
									var dados = {cpf:cpf,aula:aula,equipamento:equipamento,sala:sala,data:data_agenda,data_ultilizar: data};
									$.post(
										"../php/agendar.php",
										dados,
										function(page){
											if(page != ""){
												$('#close').click();
											}else{
												alert(page);
												}
										},
										'JSON'
										);
								}
							}
						}
					}
				}
			}
				}
