<?php
	date_default_timezone_set('America/Sao_Paulo');
    include('dao/conection_banco.php');

	error_reporting(0);

    if(!empty($_POST)){

		$realizacao = $_POST['realizacao'];
		$data_atual = $_POST['data_atual'];
		$hora_atual = $_POST['hora_atual'];

		$razao_social = $_POST['razao_social'];
		$email = $_POST['email'];
		$cnpj = $_POST['cnpj'];
		$telefone = $_POST['telefone'];

        $conjunto1 = $_POST['conjunto1'];
		$conjunto2 = $_POST['conjunto2'];
		$conjunto3 = $_POST['conjunto3'];
		$conjunto4 = $_POST['conjunto4'];
		$conjunto5 = $_POST['conjunto5'];
		$conjunto6 = $_POST['conjunto6'];
		$conjunto7 = $_POST['conjunto7'];
		$conjunto8 = $_POST['conjunto8'];
		$conjunto9 = $_POST['conjunto9'];
		$conjunto10 = $_POST['conjunto10'];
		$conjunto11 = $_POST['conjunto11'];
		$conjunto12 = $_POST['conjunto12'];
		$conjunto13 = $_POST['conjunto13'];
		$conjunto14 = $_POST['conjunto14'];
		$conjunto15 = $_POST['conjunto15'];
		$conjunto16 = $_POST['conjunto16'];
		$conjunto17 = $_POST['conjunto17'];
		$conjunto18 = $_POST['conjunto18'];
		$conjunto19 = $_POST['conjunto19'];
		$conjunto20 = $_POST['conjunto20'];
		$conjunto21 = $_POST['conjunto21'];
		$conjunto22 = $_POST['conjunto22'];

		$melhoria = $_POST['melhoria'];
		$sugestoes = $_POST['sugestoes'];
		$vendas = $_POST['vendas'];
		$competitividade = $_POST['competitividade'];

		$pontos = 0;
		$pontos_obtidos = 0;

		$pontos_obtidos = ($conjunto1 + $conjunto2 + $conjunto3 + $conjunto4 + $conjunto5 + $conjunto6 + $conjunto7 + $conjunto8 + $conjunto9 + $conjunto10 + $conjunto11 + $conjunto12 + $conjunto13 + $conjunto14 + $conjunto15 + $conjunto16 + $conjunto17 + $conjunto18 + $conjunto19 + $conjunto20 + $conjunto21 + $conjunto22);

	    $sql = "INSERT INTO pesquisa (realizacao, data_atual, hora_atual, razao_social, email, cnpj, telefone, conjunto1, conjunto2, conjunto3, conjunto4, conjunto5, conjunto6, conjunto7, conjunto8, conjunto9, conjunto10, conjunto11, conjunto12, conjunto13, conjunto14, conjunto15, conjunto16, conjunto17, conjunto18, conjunto19, conjunto20, conjunto21, conjunto22, melhoria, sugestoes, vendas, competitividade, pontos_obtidos) 
                   
					VALUES ('$realizacao', '$data_atual', '$hora_atual', '$razao_social', '$email', '$cnpj', '$telefone', '$conjunto1', '$conjunto2', '$conjunto3', '$conjunto4', '$conjunto5', '$conjunto6', '$conjunto7', '$conjunto8', '$conjunto9', '$conjunto10', '$conjunto11', '$conjunto12', '$conjunto13', '$conjunto14', '$conjunto15', '$conjunto16', '$conjunto17', '$conjunto18', '$conjunto19', '$conjunto20', '$conjunto21', '$conjunto22', '$melhoria', '$sugestoes', '$vendas', '$competitividade', '$pontos_obtidos'); ";
					
	    $resultado = odbc_exec($conection_banco, $sql);

		//var_dump($sql); ver sql

		if (!empty($resultado)) {
			echo ("
			<html>
			<head>
			<meta charset='UTF-8'>
			<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>	
			</head>
			<body>
			<script>
			Swal.fire({
				imageUrl: '',
				imageWidth: 200,
				imageHeight: 200,
				imageAlt: 'Custom image',
				title: 'Obrigado',
				text: 'Pesquisa efetuada com Sucesso!',
			}).then(()=>location.href=\"index.php\");
			</script>
			</body>
			<html>");
		
		} else {
			echo ("
			<html>
			<head>
			<meta charset='UTF-8'>
			<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>	
			</head>
			<body>
			<script>
			Swal.fire({
					icon: 'error',
					title: 'Erro',
					text: 'Contate o administrador do sistema',
			}).then(()=>location.href=\"index.php\");
			</script>
			</body>
			<html>");
    	}
	}

?>