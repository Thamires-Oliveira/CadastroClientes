<html>
	<head>
	<meta charset="UTF-8">
		<title>Dados Recebidos</title>
		<link rel ="stylesheet"
			type="text/css"
			href="../estilos.css">
	</head>
	<body id="body_gravar">
	<?php include "cabecalho.php"; ?>
		
	<?php
	//COLETA DE DADOS
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
				if ( isset($_POST["whatsapp1"]) )
				$whatsapp1 = (int) $_POST["whatsapp1"];
		
		$celular2 = $_POST["celular2"];
			$whatsapp2=0;
				if ( isset($_POST["whatsapp2"]) )
				$whatsapp2 = (int) $_POST["whatsapp2"];
		$email = $_POST["email"];
		$obs = $_POST["obs"];

	//VALIDANDO OS DADOS	
		if (strlen($nome)=="")
			if (strlen($razaoSocial)=="")
				die("<h3 class='menssagemAterro'> Campo(s) Nome e Razão Social estão em branco,preencha um dos campos para prosseguir! </h3>");
		if($cnpj!=0)
			if (strlen($cnpj)<14)
				die("<h3 class='menssagemAterro'> CNPJ inválido,são necessários 14 números,preencha campo corretamente para prosseguir! </h3>");
		if (strlen($telefone1)!=0)
			if (strlen($telefone1)<10)
				die("<h3 class='menssagemAterro'> Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir! </h3>");
		if (strlen($telefone2)!=0)
			if (strlen($telefone2)<10)
				die("<h3 class='menssagemAterro'> Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir! </h3>");
		if (strlen($telefone3)!=0)
			if (strlen($telefone3)<10)
				die("<h3 class='menssagemAterro'> Insira um telefone válido,com DDD e 8 números,preencha campo corretamente para prosseguir! </h3>");
		if (strlen($celular1)!=0)
			if (strlen($celular1)<8)
				die("<h3 class='menssagemAterro'> Insira um celular válido,com DDD e 9 números,preencha campo corretamente para prosseguir! </h3>");
		if (strlen($celular2)!=0)
			if (strlen($celular2)<8)
				die("<h3 class='menssagemAterro'> Insira um celular válido,com DDD e 9 números,preencha campo corretamente para prosseguir! </h3>");
		if($email!=0)
			if (filter_var($email,FILTER_VALIDATE_EMAIL));
				else 
					die ("<h3 class='menssagemAterro'> E-mail inválido,preencha campo corretamente para prosseguir! </h3>");

		
			
		//CONECTANDO NO SERVIDOR MYSQL
		include "conexao.php";
		
		//INSERINDO REGISTROS	
		
		$comandoSQL = "INSERT INTO cliente(nome_cliente,razaoSocial,CNPJ,UF,cidade,telefone_1,telefone_2,telefone_3,celular_1,whatsapp_1,celular_2,whatsapp_2,
		email,OBS) VALUES('$nome','$razaoSocial','$cnpj','$uf','$cidade','$telefone1','$telefone2','$telefone3','$celular1','$whatsapp1','$celular2',
		$whatsapp2,'$email','$obs')";
		mysqli_query($conexao,$comandoSQL) or 
			die ("<h3 class='menssagemAterro'> <i>Erro ao tentar cadastrar cliente  <br> </i> </h3>" . mysqli_error($conexao)  ."<div id='botoes'><a href='clientes.html'><input type='button' id ='voltar' class='butn' value='Voltar'></a></div>");
		
		echo "<h2 class='menssagemReceb'>Dados Recebidos com Sucesso!! </h2>";
		echo "<h2 class='dados_recebidos'>";
		echo "NOME : $nome <br>";
		echo "RAZAO SOCIAL : $razaoSocial <br>";
		echo "CNPJ : $cnpj <br>";
		echo "CIDADE : $cidade <br>";
		echo "UF : $uf <br>";
		echo "TELEFONE 1: $telefone1 <br>";
		echo "TELEFONE 2: $telefone2 <br>";
		echo "TELEFONE 3: $telefone3 <br>";
		echo "CELULAR 1: $celular1 <br>";
		echo "WHATSAPP : $whatsapp1<br>";
		echo "CELULAR 2: $celular2 <br>";
		echo "WHATSAPP : $whatsapp2<br>";
		echo "E-MAIL : $email <br>";
		echo "OBSERVACOES : $obs <br>";
		echo "</h2>";
	?>	
		<div id ="botoes">
		<a href="lista.php"><input type="button" id ="listaC" class='butn' value="Lista de Cadastros"></a>&nbsp 
		<a href="clientes.html"><input type="button" id ="incluir" class='butn' value="Incluir Novo Cadastro"></a>
		</div>

	</body>
</html>


