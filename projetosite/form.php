<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="teste.css">
    	
    	
</head>
<body>
	<form class="form-horizontal" role="form">
    
    <div class="form-group" id="forms">
        <label class="com-sm-2 control-label" for="nome">Nome</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="Insira o seu nome.">
    </div>
    </div>

    <div class="form-group">
        <label for="usuario" class="com-sm-2 control-label">Usuário</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="usuario" placeholder="Insira um usuário.">
    </div>
    </div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="Celular">Celular</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" placeholder="Insira um celular.">
    </div>
	</div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="telefone">Telefone</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" placeholder="Insira um telefone.">
    </div>
	</div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="email">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Insira um email.">
    </div>
	</div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="enedereco">Endereço</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" placeholder="Insira um endereço.">
    </div>
	</div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="bairro">Bairro</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" placeholder="Insira um Bairro.">
    </div>
	</div>

    <div class="form-group" class="com-sm-2 control-label">
        <label for="senha">Senha</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" placeholder="Insira uma senha.">
  	</div>
  	</div>

  	<div class="form-group">
  		<div class="com-sm-offset-2 com-sm-10">
  		<button type="submit" value="Cadastrar" class="btn btn-default">Enviar</button>
  	</div>
  </div>

</form>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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