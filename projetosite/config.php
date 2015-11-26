<?php
$con = @mysql_connect("localhost", "root", "") or die("Não foi possivel conectar com o servidor de dados!");
mysql_select_db("project", $con) or die("Banco de Dados não localizado");
?>