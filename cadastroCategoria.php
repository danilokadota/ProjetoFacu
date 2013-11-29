<html>
	<head>
		<meta charset="UTF-8">
		<title>Sistema de cadastro</title>
		<style>
		#geral{
			text-align: center;
			width: 300px;
			height: 350px;
			border-radius: 6px;
			margin: 0 auto;
		}
		#table{
			margin: 0 auto;
			text-align: center;
		}
		#sub_table{
			margin: 0 auto;
		}
		</style>
	</head>
	<body>
		<div id="geral">
			<h4>Cadastro de Categorias</h4>
			<table id="table">
				<form action="cadastrandoCategoria.php" name="signup" method="post">
					<tr>
						<td>
							<tr>Lista de Categorias
								<td colspan="2">
									<?php
										$host = "localhost";
										$user = "root";
										$pass = "";
										$banco = "catalogo";
										$conexao = mysql_connect($host, $user ,$pass) or die(mysql_error());
										mysql_select_db($banco) or die(mysql_error());
										$query ="select * from categorias";

										$resultado = mysql_query($query,$conexao) or die(mysql_error());
										  
										if(mysql_num_rows($resultado)>0)
										{
										      print "<table border='1'>";
										      print "<tr><td>Codigo</td><td>Categoria</td></tr>";
										          while ($info = mysql_fetch_array($resultado))
										              {
										         print "<tr><td>$info[codigo]</td> <td>$info[categoria]</td></tr>";
										       }
										      print "</table>";
									 }
									?>
								</td>
							</tr>
						</td>
						<td>
							<tr>
								<td colspan="2"><b>Cadastrar Nova Categoria: </b></td>
							</tr>
							<tr>
								<td>Nome da Categoria: </td>
								<td><input type="text" name="categoria" ></td>
							</tr>
							<tr>
								<td><input type="submit" value="Cadastrar"></td>
							</tr>
							<tr>
								<td colspan="2"><b>Alterar ou Excluir Categoria: </b></td>
							</tr>
							<tr>
								<td>Nome da Categoria: </td>
								<td><input type="text" name="categoria2" ></td>
							</tr>
							<tr>
								<td>Codigo da Categoria: </td>
								<td><input type="text" name="codigo" ></td>
							</tr>
							<tr>
								<td><input type="submit" value="alterar"></td>
								<td><input type="submit" value="excluir"></td>
							</tr>
							<tr>
								<td colspan="2"><a href="areaAdministrativa.php"><input type="button" value="Voltar"></a></td>
							</tr>
						</td>
					</tr>
				</form>
			</table>
		</div>

	</body>
</html>