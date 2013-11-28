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
		<title>Cadastro Produtos</title>
		<script type="text/javascript">
		function sucesso(){
			setTimeout("window.location ='cadastroProdutos.php'",2000);
		}
		</script>
	</head>
<body>
<?php
$estoque=$_POST['estoque'];
$nome=$_POST['nome'];
$precoVenda=$_POST['precoVenda'];
$foto=$_FILES['foto']['name'];
$descricao=$_POST['descricao'];
$sql = mysql_query("INSERT INTO produtos(estoque ,nome ,precoVenda ,fotoSite ,descricao) VALUES('".$estoque."','".$nome."','".$precoVenda."','".$foto."','".$name."','".$descricao."')");
echo "Cadastro Completo";
/*echo "<script>sucesso()</script>";*/
?>

</body>


</html>