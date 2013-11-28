<html>
	<head>
		<meta charset="UTF-8">
		<title>Sistema de cadastro</title>
		<style>
		#geral{
			text-align: center;
			border: 1px solid black;
			width: 300px;
			height: 200px;
			border-radius: 6px;
		}
		</style>
	</head>
	<body>
		<div id="geral">
			<h4>Cadastro de Categorias</h4>
			<table>
				<form action="cadastrandoCategoria.php" name="signup" method="post">
					<tr>
						<td>Nome: </td>
						<td><input type="text" name="nomeC" ></td>
					</tr>
					<tr>
						<td>Linha: </td>
						<td><input type="text" name="linha" ></td>
					</tr>
					<tr>
						<td>Faixa Etária: </td>
						<td><input type="text" name="faixaEtaria" ></td>
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