<html>
	<head>
	<meta charset="UTF-8">
		<title>Gravando dados</title>

		<link rel ="stylesheet"
			type="text/css"
			href="../estilos.css">
	</head>
	
	<body id="body_gravar_alteracao">
	<?php include "cabecalho.php"; ?>
		<?php
			//VERIFICANDO SE VEIO O CODIGO ESPERADO
				if ( !isset($_POST["cod"]))
					die("<i>Erro ao tentar buscar registro</i> <br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' value='Voltar' class='butn'></a></div>");
				
				$codigo = $_POST["cod"];
			
			//CONECTANDO NO SERVIDOR MYSQL
				include "conexao.php";
			
			

		
			//CRIANDO VARIAVEIS
			$nome = $_POST["nome"];
			$razaoSocial = $_POST["razaoSocial"];
			$cnpj = $_POST["cnpj"];
			$cidade = $_POST["cidade"];
			$uf = $_POST["uf"];
			$telefone1 = $_POST["telefone1"];
			$telefone2 = $_POST["telefone2"];
			$telefone3 = $_POST["telefone3"];
			
			$celular1 = $_POST["celular1"];
			$whatsapp1=0;
				if ( isset($_POST["whatsapp1"])  )
					$whatsapp1 = (int) $_POST["whatsapp1"];
	
			$celular2 = $_POST["celular2"];
			$whatsapp2=0;
				if ( isset($_POST["whatsapp2"])  )
					$whatsapp2 = (int) $_POST["whatsapp2"];
				
			$email = $_POST["email"];
			$obs = $_POST["obs"];
			
			/*echo"<h2 class='messagemAterro'>a</h2>";*/
			
			//VALIDANDO OS DADOS	
		if (strlen($nome)=="")
			if (strlen($razaoSocial)=="")
					die("Campo(s) Nome e Razão Social está em branco,preencha um dos campos para prosseguir!");
		if($cnpj!=0)
			if (strlen($cnpj)<14)
				die("CNPJ inválido,são necessários 14 números,preencha campo corretamente para prosseguir!");
		if (strlen($telefone1)!=0)
			if (strlen($telefone1)<10)
				die("Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir!");
		if (strlen($telefone2)!=0)
			if (strlen($telefone2)<10)
				die("Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir!");
		if (strlen($telefone3)!=0)
			if (strlen($telefone3)<10)
				die("Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir!");
		if (strlen($celular1)!=0)
			if (strlen($celular1)<8)
				die("Insira um celular válido,com DDD e 9 números,preencha campo corretamente para prosseguir!");
		if (strlen($celular2)!=0)
			if (strlen($celular2)<8)
				die("Insira um celular válido,com DDD e 9 números,preencha campo corretamente para prosseguir!");
		if($email!=0)
			if (filter_var($email,FILTER_VALIDATE_EMAIL));
				else 
					die ("E-mail inválido,preencha campo corretamente para prosseguir!");
			
			//ALTERANDO REGISTROS EXISTENTES
					
				$comandoALTERAR = "UPDATE cliente SET 
				nome_cliente = '$nome',
				razaoSocial = '$razaoSocial',
				CNPJ = '$cnpj',
				UF = '$uf',
				cidade = '$cidade',
				telefone_1 = '$telefone1',
				telefone_2 = '$telefone2',
				telefone_3 = '$telefone3',
				celular_1 = '$celular1',
				whatsapp_1 = '$whatsapp1',
				celular_2 = '$celular2',
				whatsapp_2 = '$whatsapp2',
				email = '$email',
				OBS = '$obs' WHERE codigoEmpresa = '$codigo'";
	
			mysqli_query($conexao,$comandoALTERAR) or 
				die ("<i>Erro ao tentar atualizar cliente</i> " . mysqli_error($conexao)  ."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
			
			echo "<h2 class='menssagemAt'>Dados Atualizados com Sucesso!! </h2>";
		

		?>
		<div id="botoes">
		<a href="lista.php"><input type="button" id ="voltar" class='butn' value="Lista de Cadastros"></a></div>
		</div>
	</body>
	</body>
</html>