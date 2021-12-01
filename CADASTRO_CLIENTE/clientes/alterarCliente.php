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
			
	<script type="text/javascript">
        function mascara1(telefone1){ 
            if(telefone1.value.length == 0)
                telefone1.value = '(' + telefone1.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if(telefone1.value.length == 3)
                telefone1.value = telefone1.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
 
            if(telefone1.value.length == 9)
                telefone1.value = telefone1.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
		}
		
		function mascara2(telefone2){ 
            if(telefone2.value.length == 0)
                telefone2.value = '(' + telefone2.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if(telefone2.value.length == 3)
                telefone2.value = telefone2.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
            if(telefone2.value.length == 9)
                telefone2.value = telefone2.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
		}
		
		function mascara3(telefone3){ 
				if(telefone3.value.length == 0)
					telefone3.value = '(' + telefone3.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
				if(telefone3.value.length == 3)
					telefone3.value = telefone3.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
				if(telefone3.value.length == 9)
					telefone3.value = telefone3.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
			}
	
		function mascara4(celular1){ 
				if(celular1.value.length == 0)
					celular1.value = '(' + celular1.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
				if(celular1.value.length == 3)
					celular1.value = celular1.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
				if(celular1.value.length == 10)
					celular1.value = celular1.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
			}
	
		function mascara5(celular2){ 
				if(celular2.value.length == 0)
					celular2.value = '(' + celular2.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
				if(celular2.value.length == 3)
					celular2.value = celular2.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
				if(celular2.value.length == 10)
					celular2.value = celular2.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
			}
		
		function mascara6(cnpj){  
            if(cnpj.value.length == 2)
					cnpj.value = cnpj.value + '.';
			if(cnpj.value.length == 6)
			cnpj.value = cnpj.value + '.';
			if(cnpj.value.length == 10)
			cnpj.value = cnpj.value + '/';
			if(cnpj.value.length == 15)
			cnpj.value = cnpj.value + '-';
			
			}
			
			//--------------------------------------------------//

    </script>
			</head>
	<body id="body_alterar_cadastro">
		
		<?php
		
			
			include "cabecalho.php";
			//CONECTANDO NO SERVIDOR MYSQL
				include "conexao.php";
		
			//VERIFICANDO SE VEIO O CODIGO ESPERADO
			if ( ! isset($_GET["c"]))
				die("<i>Não foram encontrados registros</i> <br>"."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' value='Voltar' class='butn' ></a></div>");
			
			//RECEBENDO DADOS E EXECUTANDO UMA AÇÃO DE CONSULTA
			$codigo = $_GET["c"];
			$comandoSQL = "SELECT * FROM cliente WHERE codigoEmpresa = $codigo";
			
			//EXECUTANDO UMA AÇÃO DE CONSULTA E CONTANDO O NUMERO DE REGISTROS ENCONTRADOS
			$registros = mysqli_query ($conexao,$comandoSQL);
			if (mysqli_num_rows($registros)<1)
				die ("Registro $codigo não encontrado."."<div id='botoes'><a href='lista.php'><input type='button' id ='voltar' value='Voltar' class='butn'></a></div>");
			
			//RECEBENDO DADOS DENTRO UMA MATRIZ
			$dados = mysqli_fetch_array($registros);
			
			//CRIANDO VARIAVEIS 
			$codCliente = $dados["codigoEmpresa"];
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
				
		?>
		
			<h1 class="titulo">CLIENTE</h1>
		<form action="gravarAlteracao.php" enctype="multipart/form-data" onsubmit="return confirm('Deseja realmente alterar os dados do cadastro')" method="POST">
		
		<fieldset>
			<legend><b>Dados da Empresa</b></legend>
			<div id="dados">
			Cnpj:&nbsp <input type="text=" class="cnpj" name="cnpj" size="20" maxlength="20" value="<?php echo $cnpj ?>" onkeypress="mascara6(this)" ><br>
		Nome:&nbsp <input type="text" class="nome" name="nome" size="30" maxlength="30" value="<?php echo $nome ?>"><br>
		Razão Social:&nbsp <input type="text" class="razaoSocial" name="razaoSocial" size="50" maxlength="50" value="<?php echo $razaoSocial ?>"><br>
		Cidade:&nbsp <input type="text" class="cidade" name="cidade" size="30" maxlength="30" value="<?php echo $cidade ?>">
		&nbsp &nbsp &nbsp UF:&nbsp <input type="text" name="uf" size="2" maxlength="2" value="<?php echo $uf ?>"><br>
		Telefone 1:&nbsp <input type="text" name="telefone1" size="15" maxlength="15" value="<?php echo $telefone1 ?>" class="telefone" onkeypress="mascara1(this)">
		&nbsp &nbsp Telefone 2:&nbsp <input type="text" name="telefone2" size="15" maxlength="15" value="<?php echo $telefone2 ?>" class="telefone" onkeypress="mascara2(this)">
		&nbsp &nbsp Telefone 3:&nbsp <input type="text" name="telefone3" size="15" maxlength="15" value="<?php echo $telefone3 ?>" class="telefone" onkeypress="mascara3(this)">
		<p> Celular 1:&nbsp <input type="text" name="celular1" size="15" maxlength="15" value="<?php echo $celular1 ?>" class="celular" onkeypress="mascara4(this)">
		&nbsp Whatsapp <input type="checkbox" name="whatsapp1" class="checkbox_celular1" value="1" <?php if($whatsapp1==1)echo"checked";?>></p>
		<p>|&nbsp Celular 2:&nbsp <input type="text" name="celular2" size="15" maxlength="15" value="<?php echo $celular2 ?>" class="celular" onkeypress="mascara5(this)">
		&nbsp Whatsapp <input type="checkbox"name="whatsapp2" class="checkbox_celular1" value="1" <?php if($whatsapp2==1)echo"checked";?>></p><br>
		E-mail:&nbsp <input type="text" name="email" size="35" maxlength="35" value="<?php echo $email ?>"><br><br>
		
		
		OBS:<br>
		<textarea name="obs" rows="6" cols="93" placeholder="Insira aqui informações adicionais sobre o cliente."><?php echo $obs;?></textarea>
	</div>	
		</fieldset>
		<div id ="botoes">
		<input type="hidden" name="cod" value="<?php echo $codCliente; ?>">
		<input type="submit" value="Alterar Cadastro" class="butn"> &nbsp
		<input type="reset" value="Limpar" class="butn"> &nbsp
		<a href="lista.php"><input type="button" class="butn" value="Lista de Cadastros"></a>
		</div> 
		</form>
	<body>

</html>