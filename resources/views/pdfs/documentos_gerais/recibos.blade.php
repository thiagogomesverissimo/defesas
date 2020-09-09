@extends('pdfs.fflch')

@section('styles_head')
<style type="text/css">
	body {
		margin:0px; padding:0px;
	}
	.negrito {
		font-weight: bolder;
	}
	.justificar{
		text-align: justify;
	}
	.etiqueta{
		font-size: 14px;
	}
	table{
		background #fff; border-collapse: collapse; margin:4px;
	}
	tr, td{
		border: 1px #000 solid; padding: 4;
	}
	.nome{
		text-align:center; font-size:7px; padding:0px; 
	}
	.assinatura{
		border-bottom:1px solid;
	}
	body{
		font-size: large; margin-top:3cm;
	}
</style>
@endsection('styles_head')

@section('content')
	@inject('pessoa','Uspdev\Replicado\Pessoa')
	@foreach($professores as $professor)
		<table width="18cm" class="negrito">
			<tr>
				<td> RECIBO DE REMESSA DE DOCUMENTOS </td> 
				<td  width="4cm"> <u>DATA:</u> </td> 
			</tr> 
		</table> 
		<table width="18cm" class="negrito">
			<tr>
				<td> 
					<u>DO:</u> SERVIÇO DE PÓS-GRADUAÇÃO DA FFLCH <br>
					<u>PARA:</u> {{$professor::getDadosProfessor($professor->codpes)['endereco']}}, {{$professor::getDadosProfessor($professor->codpes)['bairro']}} <br>
        			CEP:{{$professor::getDadosProfessor($professor->codpes)['cep']}} - {{$professor::getDadosProfessor($professor->codpes)['cidade']}}/{{$professor::getDadosProfessor($professor->codpes)['estado']}}
					<div style="text-indent:1.5cm;">
						A/C: Prof(a). Dr(a). {{$pessoa::dump($professor->codpes)['nompes']}}
					</div> 
				</td> 
			</tr> 
		</table>
		<table width="18cm" class="negrito">
			<tr>
				<td> 
					<u>ASSUNTO:</u> encaminho exemplar do trabalho do aluno(a) Sr(a). {{$agendamento->nome}}
				</td> 
			</tr>
		</table>

		<table width="18cm" class="negrito">
			<tr>
				<td width="9cm">
					Recebido em: ____/____/____
				</td> 
				<td>
					<div class="assinatura">&nbsp;</div>
					<div class="nome">Nome Legível</div>
				</td> 
			</tr> 
		</table>
		
		<br><br><br><br><br><br><br><br><br><br>

		<table width="18cm" class="negrito">
			<tr>
				<td> RECIBO DE REMESSA DE DOCUMENTOS </td> 
				<td  width="4cm"> <u>DATA:</u> </td> 
			</tr> 
		</table>

		<table width="18cm" class="negrito">
			<tr>
				<td>
					<u>DO:</u> SERVIÇO DE PÓS-GRADUAÇÃO DA FFLCH <br>
					<u>PARA:</u>  {{$professor::getDadosProfessor($professor->codpes)['endereco']}}, {{$professor::getDadosProfessor($professor->codpes)['bairro']}} <br>
        			CEP:{{$professor::getDadosProfessor($professor->codpes)['cep']}} - {{$professor::getDadosProfessor($professor->codpes)['cidade']}}/{{$professor::getDadosProfessor($professor->codpes)['estado']}}
					<div style="text-indent:1.5cm;"> A/C: Prof(a). Dr(a). {{$pessoa::dump($professor->codpes)['nompes']}} </div> 
				</td> 
			</tr>
		</table>

		<table width="18cm" class="negrito">
			<tr>
				<td> 
					<u>ASSUNTO:</u> encaminho exemplar do trabalho do aluno(a) Sr(a). {{$agendamento->nome}}
				</td> 
			</tr>
		</table>
		
		<table width="18cm" class="negrito">
			<tr>
				<td width="9cm">Recebido em: ____/____/____ </td> 
				<td>
					<div class="assinatura">&nbsp;</div>
					<div class="nome">Nome Legível</div>
				</td> 
			</tr>
		</table>

		<p style="page-break-before: always">&nbsp;</p> 

	@endforeach
@endsection('content')