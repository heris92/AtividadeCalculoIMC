<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title> Título da página </title>
	</head>


	<body>
		<!-- Teste de comentario -->
		<p><b> Entre com peso e altura</b> </p>
		
		
		<!-- formulario -->
		
		<form> 
			Peso: <input name="peso">
			<br>Altura: <input name="altura">
			
			<br/>
			<br>
			
			<button>Calcular o IMC</button>
			</br>
		</form>	
		
		
		<?php 
		
			if (isset($_GET["peso"]) ) {	
			
				$peso = $_GET["peso"];	
				$altura = $_GET["altura"];
				$calculo = $peso / ($altura * $altura);			
				echo "<p> Seu IMC é:  $calculo</p>";
				if ($calculo <18.5){
				 echo "<p>Baixo peso </p>";				 
				}
				else if ($calculo ==18.5 |$calculo <=24.9){
						echo "<p>Peso Normal</p>";
				} 
				else if ($calculo ==25 |$calculo <=29.9){
						echo "<p>Sobrepeso</p>";
				} 
				else if ($calculo ==30 |$calculo <=34.9){
						echo "<p>Obesidade grau I</p>";
				} 
				else if ($calculo ==35 |$calculo <=39.9){
						echo "<p>Obesidade grau II</p>";
				} 
				else if ($calculo >=40) {
						echo "<p>Obesidade grau III</p>";
				} 
				
				
			}
		?>
		
		
		
		
	
	
	
	
	
	
	
	
	
	</body>

</html>