<html>
	<head>
	<meta charset="UTF-8">
		<title>Lista de Cadastro Clientes</title>
			<link rel ="stylesheet"
			type="text/css"
			href="../estilos.css">
		<script type="text/javascript">
			function confirmar(cod) {
			var confirmar = confirm("Tem certeza que deseja excluir cadastro?");
			if(confirmar){
			window.location = "excluir.php?c=" + cod;
			};
			}
		</script>
	</head>
	<body id ="bodyLista">
	<div id="listagem">
			
			<?php include "cabecalho.php";include "form.php" ?>
			<div id="botoes"><a href="clientes.html"><input type="button" class="butn" value="Incluir Novo Cadastro"></a>
		</div>

		<?php
		
		//CONECTANDO NO SERVIDOR MYSQL
			include "conexao.php";
/*comeca aqui*/
	//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
		$pagina = (isset($_GET['pagina']))?$_GET['pagina'] : 1;
		$maxlinks = 4;
	//Selecionar todos os cursos da tabela
		$result_curso = "SELECT * FROM cliente";
		$resultado_curso = mysqli_query($conexao, $result_curso);

	//Contar o total de cursos
		$total_clientes = mysqli_num_rows($resultado_curso);
		$total_cadastros = $total_clientes;
	//Seta a quantidade de cursos por pagina
		$quantidade_pg = 20;

	//calcular o número de pagina necessárias para apresentar os cursos
		$num_pagina = ceil($total_clientes/$quantidade_pg);

	//Calcular o inicio da visualizacao
		$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

	//Selecionar os cursos a serem apresentado na página
		$comandoSQL = "SELECT codigoEmpresa,nome_cliente,razaoSocial,CNPJ,UF,cidade,telefone_1,telefone_2,telefone_3,celular_1,whatsapp_1,celular_2,whatsapp_2,email,OBS FROM cliente ORDER BY nome_cliente LIMIT $incio, $quantidade_pg";
		$resultado_cursos = mysqli_query($conexao,$comandoSQL);
		$total_clientes = mysqli_num_rows($resultado_cursos);

/*termina aqui*/	


		mysqli_select_db($conexao,$database) or 
				die ("<h3 class='menssagemAterro2'> <i>Erro na seleção do banco </i> </h3>" . mysqli_error ($conexao)."<div id='botoes'><a href='clientes.html'><input type='button' class='butn' id ='voltar' value='Voltar'></a></div>");
			$executar = mysqli_query($conexao,$comandoSQL) or 
				die("<h3 class='menssagemAterro2'> <i>Falha na seleção de dados </i> </h3>" . mysqli_error($conexao)."<div id='botoes'><a href='clientes.html'><input type='button'  id ='voltar' class='butn' value='Voltar'></a></div>");
			$contarLinhas = mysqli_num_rows($executar) or 
				die ("<h3 class='menssagemAterro2'><i>Não foram encontrados registros</i>" . mysqli_error($conexao)."</h3><br>"."<div id='botoes'><a href='clientes.html'><input type='button' class='butn' id ='voltar' value='Voltar'></a></div>");
			if ($contarLinhas==0)
				die("<h3 class='menssagemAterro2'> <i>Não foram encontardo(s) resgistro(s)</i></h3>"."<div id='botoes'><a href='clientes.html'><input type='button' id ='voltar'  class='butn' value='Voltar'></a></div>");
			echo "<h2 style='background-image: url(../background.jpg);' id='h2_barra'>Foram encontrado(s) $total_cadastros Registro(s)</h2>";			
			
			$contador = 1;
		echo "<div id='barra_rolagem'>";
		echo "<table border='1' bordercolor='#0fd5e0' color='black'>";
		echo "<tr>";
		echo "<th bgcolor='#0fd5e0'>N&ordm</th>";
		echo "<th bgcolor='#0fd5e0' >Cod Cliente</th>";
		echo "<th bgcolor='#0fd5e0'>Nome</th>";
		echo "<th bgcolor='#0fd5e0'>Razão Social</th>";
		echo "<th bgcolor='#0fd5e0'>CNPJ</th>";
		echo "<th bgcolor='#0fd5e0'>Cidade</th>";
		echo "<th bgcolor='#0fd5e0'>UF</th>";
		echo "<th bgcolor='#0fd5e0' colspan='3'>Telefone</th>";
		echo "<th bgcolor='#0fd5e0' >Celular</th>";
		echo "<th bgcolor='#0fd5e0'>Whatsapp</th>";
		echo "<th bgcolor='#0fd5e0' >Celular</th>";
		echo "<th bgcolor='#0fd5e0'>Whatsapp</th>";
		echo "<th bgcolor='#0fd5e0'>Email</th>";
		echo "<th bgcolor='#0fd5e0'>OBS</th>";
		echo "<th bgcolor='#0fd5e0' colspan ='2'> Excluir / Alterar Registros</th>";
		echo"</tr>";
		
		while($contador<=$contarLinhas){
			$dados = mysqli_fetch_array($executar);
			$codigo = $dados["codigoEmpresa"];
			$nome = $dados["nome_cliente"];
			$razaoSocial = $dados["razaoSocial"];
			$cnpj = $dados["CNPJ"];
			$cidade = $dados["cidade"];
			$uf = $dados["UF"];
			$telefone1 = $dados["telefone_1"];
			$telefone2 = $dados["telefone_2"];
			$telefone3 = $dados["telefone_3"];
			$celular1 = $dados["celular_1"];
			$whatsapp1 = $dados["whatsapp_1"];
			$celular2 = $dados["celular_2"];
			$whatsapp2 = $dados["whatsapp_2"];
			$email = $dados["email"];
			$obs = $dados["OBS"];
		echo "<tr>";
		echo "<td bgcolor='#f7f4d7' align='center'>".($contador)."</td>";
		echo "<td bgcolor='#f7f4d7'align='center'>$codigo</td>";
		echo "<td bgcolor='#f7f4d7' align='center'> <a href='resultado.php?cod=$codigo' > $nome </a> </td>";
		echo "<td bgcolor='#f7f4d7'> <a href='resultado.php?cod=$codigo' > $razaoSocial  </a> </td>";
		echo "<td bgcolor='#f7f4d7'>$cnpj</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$cidade</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$uf</td>";
		echo "<td bgcolor='#f7f4d7' align='center' width='300'>$telefone1</td>";
		echo "<td bgcolor='#f7f4d7' align='center' width='300'>$telefone2</td>";
		echo "<td bgcolor='#f7f4d7' align='center' width='300'>$telefone3</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$celular1</td>";
			
			if($celular1!=''){
				if ($whatsapp1==1)
					echo "<td bgcolor='#f7f4d7' align='center' > sim </td>";
				else echo "<td bgcolor='#f7f4d7' align='center'> nao </td>";
				}
			else echo "<td bgcolor='#f7f4d7'> </td>";
		
		echo "<td bgcolor='#f7f4d7'>$celular2</td>";
			
			if($celular2!=''){
				if($whatsapp2==1)
					echo "<td bgcolor='#f7f4d7' align='center' > sim </td>";
				else echo "<td bgcolor='#f7f4d7'align='center'> nao </td>";
				}
		else echo "<td bgcolor='#f7f4d7'> </td>";
		
		echo "<td bgcolor='#f7f4d7'>$email</td>";
		echo "<td bgcolor='#f7f4d7'>$obs</td>";
		echo "<td bgcolor='#f7f4d7' id='excluirR'><a href='javascript:confirmar($codigo)'>EXCLUIR</a></td>";
		echo "<td bgcolor='#f7f4d7' id='alterarR' ><a href='alterarCliente.php?c=$codigo' >ALTERAR</a></td>";

		echo "</tr>";     
				
			$contador++;
		}
		echo"</table>";
		echo"</div>";
		?>
		</div><br><br>
		<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
		<div id="div_paginacao">
		<div id="botao_paginacao">
				<?php if($pagina_anterior != 0){ ?>
					<a href="lista.php?pagina=1" aria-label="Previous" class="botao_paginacao">
							<span aria-hidden="true" >&laquo </span>
					</a>
				<?php }else{ ?>	
					<span aria-hidden="true" class="tc" >&laquo </span> 
				<?php }  ?>		
				
				<?php if($pagina_anterior != 0){ ?>
					<a href="lista.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous" class="botao_paginacao">
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
						<a href="lista.php?pagina=<?php echo $i; ?>" class="botao_paginacao"><?php echo $i; ?></a>
					<?php } }
					//-----------------------------
					
					echo "<span class='tc'>".$pagina. "</span>";
					
					for($i = $pagina + 1; $i <= $pagina + $maxlinks; $i++){
						if($i<=$num_pagina){?>
						<a href="lista.php?pagina=<?php echo $i; ?>" class="botao_paginacao"><?php echo $i; ?></a>
					<?php } }
					?>
					
				<?php
					if($pagina_posterior <= $num_pagina){ ?>
						<a href="lista.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous" class="botao_paginacao">
							<span aria-hidden="true" >&rsaquo;</span>
						</a>
				<?php }else{ ?>
						<span aria-hidden="true"  class="tc" >&rsaquo;</span>
					<?php }  ?>
				
				<?php
					if($pagina_posterior <= $num_pagina){ ?>
						<a href="lista.php?pagina=<?php echo $num_pagina; ?>" aria-label="Previous" class="botao_paginacao">
							<span aria-hidden="true" >&raquo </span>
						</a>
				<?php }else{ ?>
						<span aria-hidden="true"  class="tc" >&raquo </span>
					<?php }  ?>
				
			</div>
		</div>
			<p class="rodape">&nbsp &nbsp &nbsp INDI COMERCIO DE PRODUTOS OPTICOS LTDA ME &#169; &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 11.142.319/0001-78 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp (11) 3227-3144 / (11) 9 8379-2164 </p>
		
	</body>
</html>
