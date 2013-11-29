<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "catalogo";
$conexao = mysql_connect($host, $user ,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

?>
<html>
	<head>
		<title>Cadastro Categoria</title>
		<script type="text/javascript">
		function sucesso(){
			setTimeout("window.location ='cadastroCategoria.php'",1000);
		}
		</script>
	</head>
<body>
<?php
$categoria=$_POST['categoria'];
$categoria=$_POST['categoria2'];
$codigo=$_POST['codigo'];
if ($categoria =! null and $codigo == null) {
	console.log ("kjkljh");
	$sql = mysql_query("INSERT INTO categorias (categoria) VALUES('$categoria')");
};
if ($codigo =! null and $categoria2 =! null) {
	$sql = mysql_query("DELETE FROM categorias WHERE $codigo = codigo");
	$sql = mysql_query("UPDATE categorias set categoria = $categoria2 WHERE codigo = $codigo");
}
echo "Cadastro Completo";
echo "<script>sucesso()</script>";
?>

</body>


</html>