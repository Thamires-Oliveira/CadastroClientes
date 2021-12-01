<html>
	<head>
	<meta charset="UTF-8">
		<title>CADASTRO CLIENTE</title>
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
			<?php include "cabecalho.php";include "form.php" ?>
			<div id="botoes"><a href="clientes.html"><input type="button" id ="incluir" class="butn" value="Incluir Novo Cadastro"></a>
			<a href="lista.php"><input type="button" id ="listaC" class="butn" value="Lista de Cadastros"></a>
		</div>

		<?php
		if ( !isset($_GET["cod"]))
					die("<i>Erro ao tentar buscar resgistro</i> <br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
				
				$codigo = $_GET["cod"];
		//CONECTANDO NO SERVIDOR MYSQL
			include "conexao.php";
			
			mysqli_select_db($conexao,$database) or 
				die ("<i>Erro na seleção do banco </i>" . mysqli_error ($conexao)."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			$comandoSQL = "SELECT codigoEmpresa,nome_cliente,razaoSocial,CNPJ,UF,cidade,telefone_1,telefone_2,telefone_3,celular_1,whatsapp_1,celular_2,whatsapp_2,email,OBS FROM cliente WHERE codigoEmpresa = '$codigo'";
			$executar = mysqli_query($conexao,$comandoSQL) or 
				die("<i>Falha na seleção de dados </i>" . mysqli_error($conexao)."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			
			$contarLinhas = mysqli_num_rows($executar) or 
				die ("<h4><i>Não foram encontrados registros</i>" . mysqli_error($conexao)."</h4><br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			if ($contarLinhas==0)
				die("<i>Não foram encontardo(s) resgistro(s)</i>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			
			$contador = 1;
		echo "<div id='barra_rolagem'>";
		echo "<table border='1' bordercolor='#0fd5e0' color='black'>";
		echo "<tr>";
		echo "<th bgcolor='#0fd5e0' width='20'>N&ordm</th>";
		echo "<th bgcolor='#0fd5e0' width='20'>Cod Cliente</th>";
		echo "<th bgcolor='#0fd5e0'>Nome</th>";
		echo "<th bgcolor='#0fd5e0'>Razão Social</th>";
		echo "<th bgcolor='#0fd5e0'>CNPJ</th>";
		echo "<th bgcolor='#0fd5e0'>Cidade</th>";
		echo "<th bgcolor='#0fd5e0' width='80'>UF</th>";
		echo "<th bgcolor='#0fd5e0' colspan='3' >Telefone</th>";
		echo "<th bgcolor='#0fd5e0' >Celular</th>";
		echo "<th bgcolor='#0fd5e0'>Whatsapp</th>";
		echo "<th bgcolor='#0fd5e0' >Celular</th>";
		echo "<th bgcolor='#0fd5e0'>Whatsapp</th>";
		echo "<th bgcolor='#0fd5e0'>Email</th>";
		echo "<th bgcolor='#0fd5e0'>OBS</th>";
		echo "<th bgcolor='#0fd5e0' colspan ='2'> Excluir / Alterar Registros</th>";
		echo"</tr>";
		
		while($contador <= $contarLinhas){
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
		echo "<td bgcolor='#f7f4d7' align='center'>$codigo</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$nome</td>";
		echo "<td bgcolor='#f7f4d7'>$razaoSocial</td>";
		echo "<td bgcolor='#f7f4d7'>$cnpj</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$cidade</td>";
		echo "<td bgcolor='#f7f4d7' align='center'>$uf</td>";
		echo "<td bgcolor='#f7f4d7'>$telefone1</td>";
		echo "<td bgcolor='#f7f4d7'>$telefone2</td>";
		echo "<td bgcolor='#f7f4d7'>$telefone3</td>";
		echo "<td bgcolor='#f7f4d7'>$celular1</td>";
			
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
		echo "<td bgcolor='#f7f4d7' id='alterarR'><a href='alterarCliente.php?c=$codigo'>ALTERAR</a></td>";

		echo "</tr>";     
				
			$contador++;
		}
		echo"</table>";
		echo "</div>";
		?>
		
	</body>
</html>
