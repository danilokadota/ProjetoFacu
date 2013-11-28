<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "projeto";
$conexao = mysql_connect($host, $user ,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>
<html>
	<title>Autenticando Usuario</title>
	<head>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location ='areaAdministrativa.php'",2500);
		}
		function loginfail(){
			setTimeout("window.location ='index.php'",5000);		
		}
	</script>
	</head>
<body>
	

<?php
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sql = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if($row > 0){
	session_start();
	$_SESSION['usuario']=$_POST['usuario'];
	$_SESSION['senha']=$_POST['senha'];
	echo "Login Completo";
	echo "<script>loginsuccessfully()</script>";
}else
	echo"<center> Usuario ou Senha Invalido </center>";
	echo"<script>loginfail()</script>";
?>
</body>
</html>