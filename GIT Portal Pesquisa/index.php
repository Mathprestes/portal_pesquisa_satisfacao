<?php date_default_timezone_set('America/Sao_Paulo');?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>PESQUISA DE SATISFAÇÃO</title>
    <!--=====================================================================================-->
    <meta charset="UTF-8">
    <link rel="icon" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--=====================================================================================-->
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mx-auto" href="#">
            <img src="assets/img/castor.jpg" width="180" height="80">
        </a>
    </nav>

    <div class=".container-fluid">
	
    <form role="form" class="login100-form" method="post" action="ControllerPesquisa.php">

    <!-- AVALIAÇÃO -->
	<div class="marginAv1 content-wrapper">
            
        <h1 class="section-heading">PESQUISA DE SATISFAÇÃO DE CLIENTES</h1>
        <hr class="hr" style="margin-bottom: 80px;margin-left: auto;margin-right: auto;width: 500px;border-top: ridge;">
            
            <div class="row">
                <div class="col-md-3">
                  <label class="input_label">Realização</label>
                  <input type="text" name="realizacao" id="realizacao" value="Sistema Web" class="form-control" readonly />
                </div>
                <div class="col-md-2">
                  <label class="input_label">Data</label>
                  <input type="text" name="data_atual" id="data_atual" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly />
                </div>
                <div class="col-md-2">
                  <label class="input_label">Hora</label>
                  <input type="text" name="hora_atual" id="hora_atual" value="<?php echo date('H:i:s'); ?>" class="form-control" readonly />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                  <label class="input_label">Razão Social</label>
                  <input type="text" name="razao_social" id="razao_social" class="form-control" placeholder="Razão Social" style="font-size:20px;" required>
                </div>
                <div class="col-md-6">
                  <label class="input_label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email"  style="font-size:20px;" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                  <label class="input_label">CNPJ</label>
                  <input type="text" name="cnpj" id="cnpj" placeholder="##.###.###/####-##" onkeyup="FormataCnpj(this,event)" onblur="if(!validarCNPJ(this.value)){alert('CNPJ Informado é inválido'); this.value='';}" maxlength="18"  class="form-control" ng-model="cadastro.cnpj" style="font-size:20px;" required>
                </div>
                <div class="col-md-4">
                  <label class="input_label">Telefone</label>
                  <input type="text" name="telefone" id="telefone" class="telefone form-control" placeholder="Telefone" style="font-size:20px;" required>
                </div>
            </div>
    </div>

	<div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 1 -->
	<div class="content-wrapper"> 
            <h4 class="section-heading mb-5">ATENDIMENTO (VENDAS INTERNAS - CASTOR)</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Facilidade para falar com atendente de vendas:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>   
                </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup ml-1" type="checkbox" name="conjunto1" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup ml-1" type="checkbox" name="conjunto1" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup ml-1" type="checkbox" name="conjunto1" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Recepção e atendimento prestado pelo atendente de vendas:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup1 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup1 ml-1" type="checkbox" name="conjunto2" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup1 ml-1" type="checkbox" name="conjunto2" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup1 ml-1" type="checkbox" name="conjunto2" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Respostas rápidas às solicitações durante o atendimento:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup2 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup2 ml-1" type="checkbox" name="conjunto3" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup2 ml-1" type="checkbox" name="conjunto3" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup2 ml-1" type="checkbox" name="conjunto3" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Grau de conhecimento do atendente de vendas:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup3 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup3 ml-1" type="checkbox" name="conjunto4" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup3 ml-1" type="checkbox" name="conjunto4" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup3 ml-1" type="checkbox" name="conjunto4" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 2 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">ATENDIMENTO SETOR CRÉDITO E COBRANÇA</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Informações sobre crédito e cobrança pelo departamento financeiro:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup4 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup4 ml-1" type="checkbox" name="conjunto5" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup4 ml-1" type="checkbox" name="conjunto5" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup4 ml-1" type="checkbox" name="conjunto5" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 3 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">CONTATO COMERCIAL (VENDEDORES EXTERNOS)</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Atendimento pós-venda:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup5 ml-1" type="checkbox"  name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup5 ml-1" type="checkbox"  name="conjunto6" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup5 ml-1" type="checkbox"  name="conjunto6" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup5 ml-1" type="checkbox" name="conjunto6" value="2" required> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Grau de conhecimento dos vendedores:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup6 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup6 ml-1" type="checkbox" name="conjunto7" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup6 ml-1" type="checkbox" name="conjunto7" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup6 ml-1" type="checkbox" name="conjunto7" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Visitas freqüentes e satisfatórias:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup7 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup7 ml-1" type="checkbox" name="conjunto8" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup7 ml-1" type="checkbox" name="conjunto8" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup7 ml-1" type="checkbox" name="conjunto8" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 4 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">SERVIÇO DE ATENDIMENTO AO CONSUMIDOR (SAC)</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Facilidade para falar com atendente de SAC:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup8 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required> 
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup8 ml-1" type="checkbox" name="conjunto9" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup8 ml-1" type="checkbox" name="conjunto9" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup8 ml-1" type="checkbox" name="conjunto9" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Rapidez no atendimento pós-contato com SAC:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup9 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup9 ml-1" type="checkbox" name="conjunto10" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup9 ml-1" type="checkbox" name="conjunto10" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup9 ml-1" type="checkbox" name="conjunto10" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Grau de conhecimento técnico do atendente de SAC:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup10 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup10 ml-1" type="checkbox" name="conjunto11" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup10 ml-1" type="checkbox" name="conjunto11" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup10 ml-1" type="checkbox" name="conjunto11" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 5 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">ASSISTÊNCIA TÉCNICA (ATENDIMENTO EXTERNO / VENDEDOR)</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Facilidade para falar com pessoal técnico:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup11 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup11 ml-1" type="checkbox" name="conjunto12" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup11 ml-1" type="checkbox" name="conjunto12" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup11 ml-1" type="checkbox" name="conjunto12" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Grau de conhecimento técnico durante a visita realizada para análise do produto:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup12 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup12 ml-1" type="checkbox" name="conjunto13" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup12 ml-1" type="checkbox" name="conjunto13" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup12 ml-1" type="checkbox" name="conjunto13" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 6 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">DESENVOLVIMENTO DE PRODUTOS</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Aceitação do novo produto pelo lojista:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup13 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup13 ml-1" type="checkbox" name="conjunto14" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup13 ml-1" type="checkbox" name="conjunto14" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup13 ml-1" type="checkbox" name="conjunto14" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Aceitação do novo produto pelo consumidor:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup14 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup14 ml-1" type="checkbox" name="conjunto15" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup14 ml-1" type="checkbox" name="conjunto15" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup14 ml-1" type="checkbox" name="conjunto15" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 7 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">PRODUTO</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Qualidade da matéria-prima do produto:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup15 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup15 ml-1" type="checkbox" name="conjunto16" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup15 ml-1" type="checkbox" name="conjunto16" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup15 ml-1" type="checkbox" name="conjunto16" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Acabamento do produto:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup16 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup16 ml-1" type="checkbox" name="conjunto17" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup16 ml-1" type="checkbox" name="conjunto17" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup16 ml-1" type="checkbox" name="conjunto17" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Qualidade do produto:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup17 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup17 ml-1" type="checkbox" name="conjunto18" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup17 ml-1" type="checkbox" name="conjunto18" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup17 ml-1" type="checkbox" name="conjunto18" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Identificação do produto:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup18 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup18 ml-1" type="checkbox" name="conjunto19" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup18 ml-1" type="checkbox" name="conjunto19" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup18 ml-1" type="checkbox" name="conjunto19" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Embalagem:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup19 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup19 ml-1" type="checkbox" name="conjunto20" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup19 ml-1" type="checkbox" name="conjunto20" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup19 ml-1" type="checkbox" name="conjunto20" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Pontualidade de entrega:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup20 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup20 ml-1" type="checkbox" name="conjunto21" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup20 ml-1" type="checkbox" name="conjunto21" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup20 ml-1" type="checkbox" name="conjunto21" value="2" required>
                    </div>
                </div>
            </div>
    </div>

    <div class="col-12 card-footer bg-dark text-muted mt-5 mb-5"> </div>

    <!-- AVALIAÇÃO 8 -->
    <div class="content-wrapper">
            <h4 class="section-heading mb-5">CONCEITO GERAL</h4>
            
            <div class="row">
                <div class="form-group col">
                    <label class="label_title">Como você classifica a empresa:</label>
                </div>

                <div class="form-group checkbox_input">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label1">Não Utilizado</label>
                    <input class="form-check-input checkgroup21 ml-1" type="checkbox" name="nao_utilizado[]" value="1" required>
                    </div>
                    <div class="form-check2 form-check-inline">
                    <label class="form-check-label2" for="inlineCheckbox2">Insastifeito</label>
                    <input class="form-check-input checkgroup21 ml-1" type="checkbox" name="conjunto22" value="0" required>
                    </div>
                    <div class="form-check3 form-check-inline">
                    <label class="form-check-label3" for="inlineCheckbox2">Satisfeito</label>
                    <input class="form-check-input checkgroup21 ml-1" type="checkbox" name="conjunto22" value="1.6" required>
                    </div>
                    <div class="form-check4 form-check-inline">
                    <label class="form-check-label4" for="inlineCheckbox2">Muito Satisfeito</label>
                    <input class="form-check-input checkgroup21 ml-1" type="checkbox" name="conjunto22" value="2" required>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="form-group col-md-6">
                    <label class="label_title">Faria alguma melhoria no(s) produto(s) fornecido(s)? Quais?</label>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-outline">
                        <textarea class="form-control" name="melhoria" maxlength="200" rows="2"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="label_title">Sugestões e/ou criticas:</label>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-outline">
                        <textarea class="form-control" name="sugestoes" maxlength="200" rows="2"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="label_title">Qual marca você vende mais na sua loja?</label>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-outline">
                        <textarea class="form-control" name="vendas" maxlength="200" rows="2"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label class="label_title">Qual fabricante está em competitividade com a Castor? (ref preço e Qualidade).</label>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-outline">
                        <textarea class="form-control" name="competitividade" maxlength="200" rows="2"></textarea>
                    </div>
                </div>
            </div>
    </div>

    <!-- ENVIAR AVALIAÇÃO -->
    <div class="mt-5 mb-5" style="display: inline-flex;margin: auto;">
        
        <div class="container-login100-form-btn mr-2">
            <input type="reset" class="login100-form-btn" value="Limpar">
        </div>

        <div class="container-login100-form-btn">
            <input type="submit" class="login100-form-btn" value="Cadastrar"> 
        </div> 

    </div>
    
    </form>
    
</div>

    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/selection_checkbox.js"></script>
    <!--===============================================================================================-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <!--===============================================================================================-->

    <script>
    jQuery("input.telefone")
        .mask("(99) 99999-999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });

        function FormataCnpj(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("/", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 3)
						campo.value = vr.substr(0, 2) + '.';
					if (tam == 6)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 5) + '.';
					if (tam == 10)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/';
					if (tam == 15)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/' + vr.substr(9, 4) + '-' + vr.substr(13, 2);
				}
			}

           function validarCNPJ(cnpj) {
                cnpj = cnpj.replace(/[^\d]+/g,'');
                if(cnpj == '') return false;
                if (cnpj.length != 14)
                    return false;

                // Elimina CNPJs invalidos conhecidos
                if (cnpj == "00000000000000" || 
                    cnpj == "11111111111111" || 
                    cnpj == "22222222222222" || 
                    cnpj == "33333333333333" || 
                    cnpj == "44444444444444" || 
                    cnpj == "55555555555555" || 
                    cnpj == "66666666666666" || 
                    cnpj == "77777777777777" || 
                    cnpj == "88888888888888" || 
                    cnpj == "99999999999999")
                    return false;
                    
                // Valida DVs
                tamanho = cnpj.length - 2
                numeros = cnpj.substring(0,tamanho);
                digitos = cnpj.substring(tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(0))
                    return false;
                    
                tamanho = tamanho + 1;
                numeros = cnpj.substring(0,tamanho);
                soma = 0;
                pos = tamanho - 7;
                for (i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2)
                        pos = 9;
                }
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1))
                    return false;
                        
                return true;
                
                }
    </script>

</body>
</html>