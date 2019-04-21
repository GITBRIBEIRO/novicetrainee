<?php
require_once "../../php/dao/Instituicao.php";
?>
<!DOCTYPE html>
<html language="pt-br">

<head>
	<title>Novice Trainee</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<meta name="keywords" content="Estágio, emprego, currículo, currículum, sites">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" href="../../css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="../../index.php"> Home </a></li>
				<li><a href="add.php"> Aluno </a></li>
				<li><a href="../empresa/add.php"> Empresa </a></li>
				<li><a href="../../index.php" #contato> Contato </a></li>
				<li><a href="../../index.php" #sobre> Sobre </a></li>
				<li><a href="../login.php"> Login </a></li>
			</ul>

		</nav>
	</header>

	<h1>Cadastro do Estudante</h1>

	<form id="formulario" method="POST" action="../php/cadEstudante.php">

		<div id="informacoesGerais">

			<h2>Informações Gerais</h2>
			<p>Nome Completo: <input type="text" name="nome"> </p>
			<p>CPF: <input type="text" name="cpf"> </p>
			<p>Senha de acesso: <input type="password" name="senha"></p>
			<p>Data de Nascimento: <input type="Date" name="data"> </p>

			<p>Sexo:
				<select name="sexo">
					<option value="m">Masculino</option>
					<option value="f">Feminino</option>
				</select>
			</p>

			<p>Estado Civil:
				<select name="estadoCivil">
					<option value="Solteiro">Solteiro</option>
					<option value="Casado">Casado</option>
					<option value="Divorciado">Divorciado</option>
					<option value="Viuvo">Viuvo</option>
				</select>
			</p>

		</div>

		<div id="Escolaridade">

			<h2> Escolaridade</h2>
			<p>RA: <input type="text" name="RA"></p>
			<p>Graduação: <input type="text" name="graduacao"> </p>

			<p>Instituicao
				<select name="instituicao">
					<?php
					$instituicoes = (new Instituicao())->all();
					foreach ($instituicoes as $instituicao) {
						echo "<option value='{$instituicao->instituicao_id}'>{$instituicao->nome}</option>";
					}
					?>
				</select>
			</p>

			<p>Estado: <select name="estado" size=1>
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

			<p>Cidade: <input type="text" name="cidadeEsc"></p>

			<p>Curso: <input type="text" name="curso"></p>

			<p>Semeste: <input type="text" name="semestre"></p>

			<p>Periodo: <input type="text" name="periodo"></p>
		</div>
		<div id="endereco">

			<h2>Endereço</h2>
			<p>Cidade: <input type="text" name="cidade"> </p>
			<p>Estado
				<select name="estado">
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

			<p>Bairro: <input type="text" name="bairro"> </p>
			<p>CEP: <input type="text" name="cep"> </p>
			<p>Rua: <input type="text" name="rua"> </p>
			<p>Complemento: <input type="text" name="complemento"> </p>
			<p>numero: <input type="text" name="numero"> </p>

		</div>

		<div id="contato">

			<h2>Contato</h2>
			<p>E-mail: <input type="E-mail" name="email"> </p>
			<p>celular: <input type="text" name="celular"> </p>
			<p>telefone: <input type="text" name="telefone"> </p>
			<p>telefone para recado:<input type="text" name="recado"> </p>

		</div>

		<input type="submit" name="cadastrar" value="Cadastrar">
		<input type="reset" name="Apagar campos" value="Redefinir">

		</div>



	</form>
	<footer>
		<h6>Desenvolvido por: Grupo - Faculdade Olavo Bilac</h6>
	</footer>
</body>

</html>