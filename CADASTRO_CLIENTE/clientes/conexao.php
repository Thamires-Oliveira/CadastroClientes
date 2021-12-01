<?php //CONECTANDO NO SERVIDOR MYSQL
		$pagina = "localhost";
		$usuario="root";
		$senha="";
		$database="cadastro_cliente";
		
		$conexao = mysqli_connect( $pagina,$usuario,$senha);
		
		mysqli_select_db($conexao,$database) or 
			die ("Erro na seleção do banco ". mysqli_error($conexao));
			?>