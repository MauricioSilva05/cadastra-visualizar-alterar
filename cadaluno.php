<?php
 error_reporting(E_ALL);

 ini_set("display_errors", 1);

 include_once ("header.html");

 if( !empty($_POST['form_submit']) ){

 obterDados($_POST);

 }
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadaluno.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>cadastro</title>
</head>
<body>
   
    <div class="container">

    <div class="main">
    
    <form action="mostraaluno.php" method="post">

<h1>Cadastros</h1>

<div class="nomedados5">
    <div class="nome"><p>Luna meu amor</p></div>
</div>

<div class="dadosnome">
<input type="text" name="nome" class="config5">
</div>

<div class="nomedados2">
<div id="nomerg"><p>RG</p></div>
<div id="nomeorgao"><p>Órgão de Expedição</p></div>
<div id="nomecpf"><p>CPF</p></div>
</div>

<div class="dados">
<input type="text" name="rg" class="config2">

<select class="config2" name="orgaoexpe">
<option value="selecione"></option>
<option value="BA">BA</option>
<option value="MG">MG</option>
<option value="SP">SP</option>
</select>

<input type="text" name="cpf" class="config2">
</div>

<div class="nomedados3">
<p>Telefone de contato</p>
<p>Email</p>
</div>

<div class="dados">
<input type="number" name="telefone" class="config4">
<input type="email" name="email" class="config4">
</div>

<div class="nomedados1">
    <div id="nomecurso"><p>Curso</p></div>
   <div id="nomematricula"><p>Número de matrícula</p></div>
</div>

<div class="dados">

<select class="config1" name="cursos1">
<option value=""></option>
<option value="Técnico em Agropecuária">Técnico em Agropecuária</option>
<option value="Técnico em Informática">Técnico em Informática</option>
<option value="Técnico em Agroindústria">Técnico em Agroindústria</option>
</select>

<input type="text" required name="matricula" class="config2">
</div>

<div class="nomedados1">
    <p>Endereço</p>
    <p>Complemento</p>
</div>
<div class="dados">
<input type="text"  name="endereco" class="config1">
<input type="text"  name="complemento" class="config2">
</div>

<div class="nomedados2">
<div id="nomecidade"><p>Bairro</p></div>
<div id="nomeestado"><p>Município</p></div>
<div id="nomecep"><p>CEP</p></div>
</div>

<div class="dados">
<input type="text" name="bairro" class="config2">
<input type="text" name="municipio" class="config2">
<input type="number" name="cep" class="config2">
</div>

<div id="layoutbotao">
<input type="submit" value="Cadastrar" id="botao">
</div>
</form>
 
</div>
</div>

</body>
</html>

<?php

 include_once ("footer.php");

?>