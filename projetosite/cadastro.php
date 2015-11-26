<?php
	require_once "config.php";
?>
<html>
<head>
	<title>Formulario de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="cadastro">
		<form method="post" action="?go=Cadastrar">
			<table id="cad_table"> 
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" id="nome" class="txt" /></td>
			</tr>
			<tr>
				<td>Usuário:</td>
				<td><input type="text" name="usuario" id="usuario" class="txt" maxlength="15" /></td>	
			</tr>
			<tr>
				<td>Celular:</td>
				<td><input type="text" name="celular" id="celular" class="txt" /></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="telefone" id="telefone" class="txt" /></td>
			</tr>
			<tr>
				<td>E-Mail:</td>
				<td><input type="text" name="email" id="email" class="txt" /></td>	
			</tr>
			<tr>
				<td>Endereço:</td>
				<td><input type="text" name="endereco" id="endereco" class="txt" /></td>	
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><input type="text" name="cidade" id="cidade" class="txt" /></td>	
			</tr>
			<tr>
				<td>Bairro:</td>
				<td><input type="text" name="bairro" id="bairro" class="txt" /></td>	
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha" id="senha" class="txt" maxlength="15"/></td>	
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Cadastrar" id="btnCadastro"></td>
			</tr>
			</table>	
		</form>
</body>
</html>

<?php
	if(@$_GET['go'] == 'Cadastrar'){
		
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$celular = $_POST['celular'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$password = $_POST['senha'];

		if (empty($nome)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($usuario)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($celular)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($telefone)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($email)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($endereco)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($cidade)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($bairro)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}
		elseif(empty($password)) {
			echo "<script>alert('Preencha todos os campos para efetuar o cadastro!'); history.back();</script>";
		}else{
			$query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$usuario'"));
			if ($query1 == 1) {
				echo "<script>alert('Usuário já existe!'); history.back();</script>";
			 }else{
				mysql_query("insert into usuario (nome, usuario, celular, telefone, email, endereco, cidade, bairro, senha) values ('$nome','$usuario','$celular','$telefone','$email','$endereco','$cidade','$bairro','$password')");
					echo "<script>alert('Usuário cadastrado com sucesso!'); history.back();</script>";
					echo "<meta http-equiv='refresh' content='0, url=cadastro.php'>";
			}
		}
	}

?>