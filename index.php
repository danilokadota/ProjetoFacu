<html>
	<head>
	<title>Galeria de Produtos</title>
	<style>
		#container{
			width: 100%;
		}
		#cabecelho{
			width: 100%;
			height: 70px;
			background-color: red;
			display: inline;
		}
		#logotipo{
			width: 150px;
			height: 80px;
			float: left;

		}
		#title_cab{
			margin-left:300px; 
			width: 300px;
			margin: 0 auto;
			margin-top: 30px;
			
		}
		#lateral{
			width: 25%;
			height: 605px;
			float: left;
			background-color: green;
		}
		#conteudo{
			width: 75%;
			height: 605px;
			float: right;
			background-color: yellow;
		}
		#cont{
			width: 33%;
			height: 200px;
			float: left;
			border:1px solid black;
			text-align: center;
		}
		#rodape{
			width: 100%;
			height: 80px;
			clear: both;
			background-color: blue;
		}
		#img{
			margin-left:20px;
			width: 150px;
			height: 60px;
		}
		#form{
			margin-left: 1000px;
			width: 400px;
			height: 80px;
			text-align: center;
		}
	</style>
	</head>
	<body>
		<div id="container">
			<div id="cabecalho">
				<img src="img/logotipo.png" alt="logotipo" id="logotipo">
				<h2 id="title_cab">Thunders Toys LTDA.</h2>
				<div id="form">
					<h4>Área Administrativa</h4>
					<form action="userautentication.php" name="loginform" method="post">
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
					mysql_select_db("projeto") or 
						die("ERRO MYSQL:" . mysql_error());
					$sql="SELECT * FROM categorias ORDER BY nome";
					
					$rs=mysql_query($sql)  or 
						die("ERRO MYSQL:" . mysql_error());
					$totLinhas = mysql_num_rows($rs);
					
					for($n=0 ; $n<$totLinhas ; $n++)
					{
						$codCategoria=mysql_result($rs , $n, 'codigo');
						
						echo "<a href='index.php?categoria=$codCategoria'>";
						echo mysql_result($rs , $n, 'nome');
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
					<a href="">+Detalhes</a>
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