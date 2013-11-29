<html>
	<head>
	<title>Galeria de Produtos</title>
	<style>
		#container{
			width: 1366px;

		}
		#cabecelho{
			width: 1366px;
			height: 130px;
			background-color: red;
			float: left;
		}
		#logotipo{
			width: 150px;
			height: 80px;
			margin-left: 20px;
			float: left;
		}
		#title_cab{
			margin-left:400px; 
			width: 235px;
			margin-top: 30px;
			float: left;
		}
		#form{
			width: 250px;
			height: 130px;
			text-align: center;
			border:3px solid black;
			border-radius: 3px;
			margin-left: 900px;
			float: left;
		}
		#lateral{
			width: 25%;
			height: 605px;
			background-color: green;
			float: left;
		}
		#conteudo{
			width: 75%;
			height: 605px;
			background-color: yellow;
			float: left;
		}
		#rodape{
			width: 1366px;
			height: 80px;
			background-color: blue;
			float: left;	
		}
		#cont{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
			text-align: center;
		}
		#img{
			margin-left:20px;
			width: 150px;
			height: 60px;
		}
	</style>
	</head>
	<body>
		<div id="container">
			<div id="cabecalho">
				<img src="img/logotipo.png" alt="logotipo" id="logotipo">
				<h2 id="title_cab">Thunders Toys LTDA.</h2>
				<div id="form">
					<form action="userautentication.php" name="loginform" method="post">
					<p><b>Área Administrativa</b></p>
						Login: <input type="text" name="usuario"><br/>
						Senha: <input type="password" name="senha"><br/>
						<input type="submit" value="Login">
					</form>
				</div>
			</div>
			<div id="lateral">
				<h3>Categorias</h3>
				<?php
					mysql_connect("localhost","root","");
					mysql_select_db("catalogo") or 
						die("ERRO MYSQL:" . mysql_error());
					$sql="SELECT * FROM categorias ORDER BY categoria";
					
					$rs=mysql_query($sql)  or 
						die("ERRO MYSQL:" . mysql_error());
					$totLinhas = mysql_num_rows($rs);
					
					for($n=0 ; $n<$totLinhas ; $n++)
					{
						$codCategoria=mysql_result($rs , $n, 'codigo');
						
						echo "<a href='index.php?categoria=$codCategoria'>";
						echo mysql_result($rs , $n, 'categoria');
						echo "</a>";
						
						echo '<br>';
					}
				?>
			</div>
			<div id="conteudo">
				<div id="cont">
					<img src="img/brinquedo  Helicoptero 1.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="detalheProduto.php?produto=010011">+detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo  Helicoptero 2.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de carrinho 1.jpg" id="img"alt="">
										<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de carrinho 2.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de carrinho 3.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de menina 1.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de menina 2.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de praia 1.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
				<div id="cont">
					<img src="img/brinquedo de praia 2.jpg" id="img"alt="">
					<p><b>001</b><br/>
					Helicoptero sky <br/>
					R$50,00</p>
					<a href="">+Detalhes</a>
				</div>
			</div>
			<div id="rodape"></div>
		</div>
	</body>
</html>