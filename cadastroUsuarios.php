<html>
	<head>
		<meta charset="UTF-8">
		<title>Sistema de cadastro</title>
		<style>
		#geral{
			text-align: center;
			width: 300px;
			height: 200px;
			border-radius: 6px;
			margin: 0 auto;
		}
		</style>
	</head>
	<body>
		<div id="geral">
			<h4>Cadastro de Usuarios</h4>
			<table>
				<form action="cadastrandoUsuario.php" name="signup" method="post">
					<tr>Lista de Usuarios
						<td colspan="2">
							<?php
								$host = "localhost";
								$user = "root";
								$pass = "";
								$banco = "catalogo";
								$conexao = mysql_connect($host, $user ,$pass) or die(mysql_error());
								mysql_select_db($banco) or die(mysql_error());
								$query ="select * from usuarios";

								$resultado = mysql_query($query,$conexao) or die(mysql_error());
								  
								if(mysql_num_rows($resultado)>0)
								{
								      print "<table border='1'>";
								      print "<tr><td>Codigo</td><td>Login</td><td>Senha</td></tr>";
								          while ($info = mysql_fetch_array($resultado))
								              {
								         print "<tr><td>$info[ID]</td> <td>$info[usuario]</td><td>$info[senha]</td></tr>";
								       }
								      print "</table>";
							 }
							?>
						</td>
					</tr>
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
					</tr>
					<tr>
						<td colspan="2"><h4>Digite o codigo para apagar usuario</h4></td>
					</tr>
					<tr>
						<td>Codigo: </td>
						<td><input type="text" name="codigo" ></td>
					</tr>
					<tr>
						<td><input type="submit" value="Deletar"></td>
					</tr>
					<tr>
						<td><a href="areaAdministrativa.php"><input type="button" value="Voltar"></a></td>
					</tr>
				</form>
			</table>
		</div>

	</body>
</html>