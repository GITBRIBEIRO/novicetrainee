<?php
require_once "../../php/dao/Estudante.php";
require_once "../../php/Session.php";

Session::handle('estudante');

$model = Session::get('model');

$info = (new Estudante())->info($model->estudante_id)[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Área do Estudante</title>
	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container theme-showcase" role="main">
		<div class="container-fuid">
			<div class="page-header">
				<h1>Área do Estudante</h1>
				<a href='../../php/login.php'>
					<div class='btn btn-primary'><span>Sair</span></div>
				</a>
			</div>
			<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="pill">Home</a></li>
					<li role="presentation"><a href="#atDados" aria-controls="atDados" role="tab" data-toggle="pill">Atualizar Dados</a></li>
					<li role="presentation"><a href="#vagasDisp" aria-controls="vagasDisp" role="tab" data-toggle="pill">Vagas Disponíveis</a></li>
					<li role="presentation"><a href="#curriculo" aria-controls="curriculo" role="tab" data-toggle="pill">Currículo</a></li>
				</ul>


				<!-- Home -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">

						<center>
							<h2>
								<?php
								echo 'Olá, ' . $model->nome;
								?>

							</h2>
							<br>
							<table border="1" width="600">
								<tr>
									<td colspan="4">
										<center>Vagas Inscritas</center>
									</td>
								</tr>
								<tr>
									<td>TESTE</td>
								</tr>
							</table>
						</center>
					</div>


					<!-- ATUALiZAR DADOS -->

					<div role="tabpanel" class="tab-pane" id="atDados">
						<form id="formulario" method="POST" action="../../php/estudante/update.php">
							<div id="Escolaridade">
								<h2> Escolaridade</h2>
								<p>Instituição<select name="instituicao">
										<?php
										$instituicoes = (new Dao())->get('instituicao');
										foreach ($instituicoes as $instituicao) {
											echo "<option value='{$instituicao->instituicao_id}'>{$instituicao->nome}</option>";
										}
										?>
									</select>
								</p>
								<p>Curso<select name="instituicao[curso]">
										<option value='Ciência da Computação'>Ciência da Computação</option>
									</select></p>
								<p>RA<input type="text" name="instituicao[RA]" value="<?php echo $info->RA;?>"></p>
								<p>Semestre<input type="text" name="instituicao[semestre]" value="<?php echo $info->semestre;?>"></p>
								<p>Periodo<select name="instituicao[periodo]">
										<option value='Manha'>Manhã</option>
										<option value='Tarde'>Tarde</option>
										<option value='Noite'>Noite</option>
									</select></p>
							</div>

							<div id="endereco">
								<h2>Endereço</h2>
								<p>Cidade<input type="text" name="endereco[cidade]" value="<?php echo $info->cidade;?>"></p>
								<p>Estado
									<select name="endereco[estado]">
										<option value='AC'>AC</option>
										<option value='AL'> AL</option>
										<option value='AP'> AP</option>
										<option value='AM'> AM</option>
										<option value='BA'> BA</option>
										<option value='CE'> CE</option>
										<option value='DF'> DF</option>
										<option value='ES'> ES</option>
										<option value='GO'> GO</option>
										<option value='MA'> MA</option>
										<option value='MT'> MT</option>
										<option value='MS'> MS</option>
										<option value='MG'> MG</option>
										<option value='PA'> PA</option>
										<option value='PB'> PB</option>
										<option value='PE'> PE</option>
										<option value='PI'> PI</option>
										<option value='PR'> PR</option>
										<option value='RJ'> RJ</option>
										<option value='RN'> RN</option>
										<option value='RS'> RS</option>
										<option value='RO'> RO</option>
										<option value='RR'> RR</option>
										<option value='SC'> SC</option>
										<option value='SP'> SP</option>
										<option value='SE'> SE</option>
										<option value='TO'> TO</option>
									</select>
								</p>
								<p>CEP<input type="text" name="endereco[cep]" value="<?php echo $info->cep;?>"></p>
								<p>Bairro<input type="text" name="endereco[bairro]" value="<?php echo $info->bairro;?>"></p>
								<p>Rua<input type="text" name="endereco[rua]" value="<?php echo $info->rua;?>"></p>
								<p>Número<input type="text" name="endereco[numero]" value="<?php echo $info->numero;?>"></p>
								<p>Complemento<input type="text" name="endereco[complemento]" value="<?php echo $info->complemento ?? '';?>"></p>
							</div>

							<div id="contato">
								<h2>Contato</h2>
								<p>E-mail<input type="E-mail" name="contato[email]" value="<?php echo $info->email;?>"></p>
								<p>Celular<input type="text" name="contato[celular]" value="<?php echo $info->celular;?>"></p>
								<p>Telefone<input type="text" name="contato[telefone]" value="<?php echo $info->telefone;?>"></p>
							</div>
							<input class="btn btn-primary btn-lg" type="submit" value="Salvar" />
						</form>
					</div>

					<div role="tabpanel" class="tab-pane" id="vagasDisp">
						</br>
						<center>
							<table class="table" border="1">
								<tr>
									<td colspan="3">TESTE</td>
									<td align="right"><input class="btn btn-info" type="submit" value="Participar" /></td>
							</table>
						</center>
					</div>
					<div role="tabpanel" class="tab-pane" id="curriculo">
						</br>
						<p>CPF:<input type="text" name="cpf"></p>


						<input class="btn btn-info" type="submit" value="Gerar Currículo" />

					</div>
				</div>

			</div>
		</div>
</body>

</html>