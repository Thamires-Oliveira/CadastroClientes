<html>
	<head>
	<meta charset="UTF-8">
		<title>Item Excluído</title>
		<link rel ="stylesheet"
			type="text/css"
			href="../estilos.css">
	</head>
	<body>
	<?php include "cabecalho.php"; ?>
		<?php
			//CONECTANDO NO SERVIDOR MYSQL
		include "conexao.php";
			if ( ! isset($_GET["c"]))
				die("<h3 class='menssagemAterro'>Rotina chamada de forma errada!</h3><br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' value='Voltar'></a></div>");
	  
			$codigo = $_GET["c"];
			$comandoSQL = "SELECT codigoEmpresa FROM cliente WHERE codigoEmpresa=$codigo";
			$executar = mysqli_query($conexao,$comandoSQL) or die("<h3 class='menssagemAterro'> Cliente com código $codigo não existe.<div id='botoes' > </h3>  <a href='lista.php'><input type='button' id ='voltar'  value='Voltar'></a></div>");
			$contarLinhas = mysqli_num_rows($executar) or 
			die ("<h3 class='menssagemAterro'>O cliente com código $codigo <b>não existe.<b></h3>" . mysqli_error($conexao) . "<div id='botoes' ><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			$comandoSQL = "DELETE FROM cliente WHERE codigoEmpresa=$codigo";
			mysqli_query($conexao,$comandoSQL);
			echo "<h3 class='menssagemAt'>Registro eliminado com sucesso!</h3><br>";
			
			?>
		<div id="botoes"><a href="lista.php"><input type="button" class="butn"  value="Voltar"></a></div>
	</body>
</html>