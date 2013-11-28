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
			<h4>Cadastro de Usuarios</h4>
			<table>
				<form action="cadastrandoUsuario.php" name="signup" method="post">
					<tr>
						<td>Login: </td>
						<td><input type="text" name="login" ></td>
					</tr>
					<tr>
						<td>Senha: </td>
						<td><input type="passoword" name="senha" ></td>
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