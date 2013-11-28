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
		<title>Cadastro Usuario</title>
		<script type="text/javascript">
		function sucesso(){
			setTimeout("window.location ='cadastroUsuarios.php'",2000);
		}
		</script>
	</head>
<body>

<?php
$login=$_POST['login'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT INTO usuario(usuario,senha)VALUES('$login','$senha')");
echo "Cadastro Completo";
echo "<script>sucesso()</script>";
?>

</body>


</html>