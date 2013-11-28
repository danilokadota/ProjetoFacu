<html>
	<head>
		<meta charset="UTF-8">
		<title>Sistema de cadastro</title>
		<style>
		#geral{
			text-align: center;
			border: 1px solid black;
			width: 400px;
			height: 300px;
			border-radius: 6px;
			margin: 0 auto;
		}
		</style>
	</head>
	<body>
		<div id="geral">
			<h4>Cadastro de Produtos</h4>
			<table>
				<form action="cadastrandoProdutos.php" name="signup" method="post" enctype="multipart/form-data">
					<tr>
						<td>Estoque: </td>
						<td><input type="text" name="estoque" ></td>
					</tr>
					<tr>
						<td>Nome: </td>
						<td><input type="text" name="nome" ></td>
					</tr>
					<tr>
						<td>Preço de Venda: </td>
						<td><input type="text" name="precoVenda" ></td>
					</tr>
					<tr>
						<td>Foto: </td>
						<td><input type="file" name="foto" ></td>
					</tr>
					<tr>
						<td>Descrição: </td>
						<td><input type="text" name="descricao" ></td>
					</tr>
					<tr>
						<td><input type="submit" value="Cadastrar"></td>
						<td><a href="areaAdministrativa.php"><input type="button" value="Voltar"></a></td>
					</tr>
				</form>
			</table>
		</div>

	</body>
</html>