<!DOCTYPE html>
<html lang="en">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			<title></title>
		<style type="text/css">
			body {
				background-image: url(images/placa.jpg); 
				background-repeat:no-repeat; 
				background-position:center;
				font-family: DejaVu Sans, sans-serif;
			}
			.cabecalho {
				font-weight: bolder; text-align: center; font-size: large; margin-top: 2cm;
			}
			.candidato {
				font-weight: bolder; text-align: left; font-size: x-large; padding: 0.3cm; width: 24cm; margin-left:2cm;
			}
		</style>
	</head>

	<body>
		<div class="content"> </div>
			<br>
			<div class="cabecalho">
				Universidade de São Paulo<br>
				Faculdade de Filosofia, Letras e Ciências Humanas <br> 
				Serviço de Pós-Graduação 
			</div>
			<br><br><br>
			<div class="candidato">Candidato(a): {{$agendamento->nome}}</div> 
			<div class="candidato">Data e Hora: {{$agendamento->data}}, {{$agendamento->horario}}.</div>
			<div class="candidato">Defesa de {{$agendamento->nivel}} em {{$agendamento->nome_area}}</div> 
			<div class="candidato">Título: <i>"{{$agendamento->titulo}}"</i></div>

		</div>
	</body>
</html>