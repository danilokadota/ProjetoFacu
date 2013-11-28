<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "projeto";
$conexao = mysql_connect($host, $user ,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>
<html>
	<head>
		<title>Cadastro Categoria</title>
		<script type="text/javascript">
		function sucesso(){
			setTimeout("window.location ='cadastor.php'",1000);
		}
		</script>
	</head>
<body>
<?php
$nomeC=$_POST['nomeC'];
$linha=$_POST['linha'];
$faixaEtaria=$_POST['faixaEtaria'];
$sql = mysql_query("INSERT INTO categorias(nome,linha,faixaEtaria)VALUES('$nomeC','$linha','$faixaEtaria')");
echo "Cadastro Completo";
echo "<script>sucesso()</script>";
?>

</body>


</html>