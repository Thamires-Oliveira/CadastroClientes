<html>
	<head>
	<meta charset="UTF-8">
		<link rel ="stylesheet"
			type="text/css"
			href="../estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
			
		</script>
	</head>
	<body>
		<script>
			$(document).ready(function() {
				  $('#RazaoSocial').hide();
				  $('#Nome').hide();
				  $('#UF').hide();
				  $('#select').change(function() {
					if ($('#select').val() == 'RazaoSocial') {
						$('#Nome').hide();
						$('#UF').hide();
						$('#RazaoSocial').show();
					} else if ($('#select').val() == 'Nome'){
						$('#RazaoSocial').hide();
						$('#UF').hide();
						$('#Nome').show();
					}else if ($('#select').val() == 'Estado'){
						$('#RazaoSocial').hide();
						$('#Nome').hide();
						$('#UF').show();
					}
					else{
						$('#RazaoSocial').hide();
						$('#Nome').hide();
						$('#UF').hide();
					}
				  });
				});
		
		</script>
			
			<h3 id="h3_pesquisar">Pesquisar Cliente</h3>
		<div id="DivPesquisar">
		<p id="p_pesquisa">Pesquisar por:</p>
		<select id="select" name="select">
			<option value="">Selecione</option>
			<option value="RazaoSocial">Razão Social</option>
			<option value="Nome">Nome</option>
			<option value="Estado">Estado</option>
		</select>

		
		
	
		
		
		<div id="RazaoSocial">
		<form method="GET" action="pesquisar_razao_social.php"id="form2">
		<h6 class="barra_pesquisa">&nbsp; 
			<input type="text" name="pesquisar2" placeholder="    Insira a razão social" class="barra_interna2"  >
			<input type="submit" value="PESQUISAR" class="butnPesquisa">
		</h6>
		</form>
		</div>
		
		
		
		
		
		<div id="Nome">
		<form method="GET" action="pesquisar.php"id="form1">
		
		<h6 class="barra_pesquisa">&nbsp;  
			<input type="text" name="pesquisar1" placeholder="   Insira o nome do cliente" class="barra_interna1">
			<input type="submit" value="PESQUISAR"  class="butnPesquisa">
		</h6>
		</form>
		</div>
		
		
		
		
		
		<div id="UF">
		<form method="GET" action="pesquisar3.php"id="form3">
		
		<h6 class="barra_pesquisa">&nbsp; 
			<input type="text" name="pesquisar3" placeholder=" UF " maxlength="2" class="barra_interna3">
			<input type="submit" value="PESQUISAR"  class="butnPesquisa">
		</h6>
		</form>
		</div>	
	</div>		
	</body>
</html>

