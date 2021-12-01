<html>
	<head>
	<meta charset="UTF-8">
		<title>CADASTRO DE CLIENTES</title>
			<style>
		margin:50px auto;
		text-align:center;
		font-family:"courier","serif";
		color:#f1fc20;}
		#botoes a {text-decoration:none;}		
		</style>
	<link rel ="stylesheet"
		type="text/css"
		href="../estilos.css">
	</head>
	<body id="bodyPesquisa" class="bodyPesquisa">
		<?php include "cabecalho.php"; ?>
		<div id ="botoes">
			<a href="lista.php"><input type="button" class="butn" value="Lista de Cadastros"></a>
		</div>
	<?php
		include "conexao.php";

/*comeca aqui paginacao*/
	
	//Verificar se está sendo passado na URL a página atual, se nao é atribuido a pagina 
		$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
			if(!isset($_GET['pesquisar2'])){
				header("Location: ../index.html");
			}else{
				$valor_pesquisar = $_GET['pesquisar2'];
			}
		$maxlinks = 4;
	//Selecionar todos os clientes da tabela
		$result_cliente = "SELECT * FROM cliente WHERE razaoSocial LIKE '%$valor_pesquisar%'";
		$resultado_cliente = mysqli_query($conexao, $result_cliente);

	//Contar o total de clientes
		$total_clientes = mysqli_num_rows($resultado_cliente);
		$total_cadastros = $total_clientes;
	
	//Seta a quantidade de clientes por pagina
		$quantidade_pg = 20;

	//calcular o número de pagina necessárias para apresentar os clientes
		$num_pagina = ceil($total_clientes/$quantidade_pg);

	//Calcular o inicio da visualizacao
		$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

	//Selecionar os clientes a serem apresentado na página
		$comandoSQL = "SELECT * FROM cliente WHERE razaoSocial LIKE '%$valor_pesquisar%' ORDER BY razaoSocial limit $inicio, $quantidade_pg";
		$resultado_clientes = mysqli_query($conexao, $comandoSQL);
		$total_clientes = mysqli_num_rows($resultado_clientes);

/*termina aqui*/

/*-----------------------------------------------------------------------------------------*/
	
	mysqli_select_db($conexao,$database) or 
				die ("<i>Erro na seleção do banco </i>" . mysqli_error ($conexao)."<div id='botoes'><a href='clientes.html'><input type='button' class='butn' id ='voltar' value='Voltar'></a></div>");
			
	$executar= mysqli_query($conexao,$comandoSQL) or 
				die("<i>Falha na seleção de dados </i>" . mysqli_error($conexao)."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");

	$contarLinhas = mysqli_num_rows($executar) or 
				die ("<h4><i>Não foram encontrados registros</i>" . mysqli_error($conexao)."</h4><br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			if ($contarLinhas==0)
				die("<i>Não foram encontardo(s) resgistro(s)</i>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			echo "<h2 class='text-hide' style='background-image: url(../background.jpg);' >Foram encontrado(s) $total_cadastros Registro(s)</h2>";

	$contador = 1;

/*-----------------------------------------------------------------------------------------*/
		
	echo "<table>";
	echo"<tr bgcolor='#e1f2f1'>";
	echo"<th class='td_pesquisa'>";
	echo"RAZAO SOCIAL";
	echo"</th>";
	echo"<th class='td_pesquisa' width='300'>";
	echo"NOME";
	echo"</th>";
	echo"</tr>";
	
	while($contador<=$contarLinhas){
		$dados = mysqli_fetch_array($executar);
			$codigo = $dados["codigoEmpresa"];
			$razaoSocial = $dados["razaoSocial"];
			$nome = $dados["nome_cliente"];
			
			echo"<tr class='butn1'>";
			echo"<td>";
			echo"&nbsp <a href='resultado_razao_social.php?cod=$codigo'><b>$razaoSocial</b></a><br>";
			echo"</td>";	
			echo"<td>";
			echo"&nbsp $nome" ;
			echo"</td>";
			echo"</tr>";
	
	$contador++;
	}
	echo "</table>";
	
	?>
	
	<br>
	
	<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
		<div id="div_paginacao">
		<div id="botao_paginacao">
				<?php if($pagina_anterior != 0){ ?>
					<a href="pesquisar_razao_social.php?pagina=1&pesquisar2=<?php echo $valor_pesquisar; ?>"  aria-label="Previous" class="botao_paginacao">
						<span aria-hidden="true" >&laquo </span>
					</a>
				<?php }else{ ?>	
					<span aria-hidden="true" class="tc" >&laquo </span> 
				<?php }  ?>		
				
				
				<?php if($pagina_anterior != 0){ ?>
					<a href="pesquisar_razao_social.php?pagina=<?php echo $pagina_anterior; ?>&pesquisar2=<?php echo $valor_pesquisar; ?>" aria-label="Previous" class="botao_paginacao">
						<span aria-hidden="true" >&lsaquo; </span>
					</a>
				<?php }else{ ?>	
					<span aria-hidden="true" class="tc" >&lsaquo; </span> 
				<?php }  ?>	


				
				<?php 
					//-------------------------
					//Apresentar a paginacao
					for($i = $pagina - $maxlinks; $i <= $pagina - 1; $i++){ 
					if($i>=1){?>
					<a href="pesquisar_razao_social.php?pagina=<?php echo $i; ?>&pesquisar2=<?php echo $valor_pesquisar; ?>" class="botao_paginacao"><?php echo $i; ?></a>
					<?php } }
					//-----------------------------
					
					echo "<span class='tc'>".$pagina. "</span>";
					
					for($i = $pagina + 1; $i <= $pagina + $maxlinks; $i++){
						if($i<=$num_pagina){?>
						<a href="pesquisar_razao_social.php?pagina=<?php echo $i; ?>&pesquisar2=<?php echo $valor_pesquisar; ?>" class="botao_paginacao"><?php echo $i; ?></a>
					<?php } }
					?>
					
				<?php
					if($pagina_posterior <= $num_pagina){ ?>
					<a href="pesquisar_razao_social.php?pagina=<?php echo $pagina_posterior; ?>&pesquisar2=<?php echo $valor_pesquisar; ?>" aria-label="Previous" class="botao_paginacao">
							<span aria-hidden="true" >&rsaquo;</span>
						</a>
				<?php }else{ ?>
						<span aria-hidden="true"  class="tc" >&rsaquo;</span>
					<?php }  ?>
				
				<?php
					if($pagina_posterior <= $num_pagina){ ?>
						<a href="pesquisar_razao_social.php?pagina=<?php echo $num_pagina; ?>&pesquisar2=<?php echo $valor_pesquisar; ?>" aria-label="Previous" class="botao_paginacao">
							<span aria-hidden="true" >&raquo </span>
						</a>
				<?php }else{ ?>
						<span aria-hidden="true"  class="tc" >&raquo </span>
					<?php }  ?>
	
	<body>

</html>