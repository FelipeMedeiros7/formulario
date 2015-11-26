<?php
  require_once "config.php";
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LF English</title>
<link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
   <div class="bg">
    <!--start container-->
    <div id="container">
    <!--start header-->
    <header>
      <!--start logo-->
      <a href="index.html" id="logo"><img src="images/logo1.png" width="180" height="43" alt="logo"/></a>    
      <!--end logo-->
      <!--start menu-->
  	   <nav>
         <ul>
         <li><a href="index.html">Inicio</a></li>
         <li><a href="form.php">Cadastro</a></li>
         <li><a href="#">Sobre</a></li>   
         <li><a href="#">Contato</a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>
         <li><a href="#"></a></li>

         <li><a href="#">Login</a></li>
         </ul>
      </nav>
  	   <!--end menu-->
      <!--end header-->
	</header>
   <!--start intro-->
  
   <!--end intro-->
   <!--start holder-->
   <div class="holder_content">
      <div id="cadastro">
        
    <form method="post" action="?go=Logar">
      <table id="login_table"> 
      <tr>
        <td>Usuário:</td>
        <td><input type="text" name="usuario" id="usuario" class="txt" maxlength="15" /></td> 
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="password" name="senha" id="senha" class="txt" maxlength="15"/></td>  
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Logar" class="btn" id="btnLogin"></td>
        <a href="form.php"><td colspan="2"><type="text" class="btn" id="btnForm"></td></a>
      </tr>
      </table>  
    </form>  
   	</section>
	</div>
	<!--end holder-->
</div>
   <!--start holder-->
   <div class="holder_content">
      
   </div>
   <!--end holder-->
   </div>
   <!--end container-->
   <!--start footer-->
   <footer>
      <div class="container">  
         <div id="FooterTwo"></div>
         <div id="FooterTree"></div> 
      </div>
   </footer>

   <!--end footer-->
   </div>
   <!--end bg-->
 </div>
   <!-- Free template distributed by http://freehtml5templates.com -->
  </body>
</html>

<?php
  if(@$_GET['go'] == 'Logar'){

    $usuario = $_POST['usuario'];
    $password = $_POST['senha'];

    if(empty($usuario)) {
      echo "<script>alert('Preencha todos os campos para logar!'); history.back(); </script>";
    }
    elseif(empty($password)) {
      echo "<script>alert('Preencha todos os campos para logar!'); history.back(); </script>";
    }else{
      $query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND SENHA = '$password'"));
      if ($query1 == 1) {
        echo "<script>alert('Usuário logado com sucesso!');</script>";
       }else{
          echo "<script>alert('Usuário ou senha não correspondem.'); history.back(); </script>";
      }
    }
  }

?>