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
    <link rel="shortcut icon" href=".//download (1).png" type="image/x-icon">
    <title>cadastro</title>
</head>
<body>
   
    <div class="container">

    <div class="main">
    
    <form action="mostraaluno.php" method="post">

<h1>Edite seus dados</h1>

<div class="nomedados5">
    <div class="nome"><p>Nome Completo</p></div>
</div>

<div class="dadosnome">
<input type="text" class= "config5" name="nome" value=<?php echo $_POST ['nome']?>>
</div>

<div class="nomedados2">
<div id="nomerg"><p>RG</p></div>
<div id="nomeorgao"><p>Órgão de Expedição</p></div>
<div id="nomecpf"><p>CPF</p></div>
</div>

<div class="dados">
<input type="number" name="rg" value=<?php echo $_POST ['rg']?>>


<select type="option" class="config2" name="orgaoexpe" value=<?php echo $_POST ['orgaoexpe']?>>
<option  value="selecione"></option>
<option  value="BA">BA</option>
<option  value="MG">MG</option>
<option  value="SP">SP</option>
</select>


<input type="text"  class="config2" name="cpf" value=<?php echo $_POST ['cpf']?>>
</div>

<div class="nomedados3">
<p>Telefone de contato</p>
<p>Email</p>
</div>

<div class="dados">
<input type="text" class="config4" name="telefone" value=<?php echo $_POST ['telefone']?>>
<input type="email"  class="config4" name="email" value=<?php echo $_POST ['email']?>>
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

<input type="text" class="config2" name="matricula" value=<?php echo $_POST ['matricula']?>>
</div>

<div class="nomedados1">
    <p>Endereço</p>
    <p>Complemento</p>
</div>
<div class="dados">
<input type="text" class="config1" name="endereco" value=<?php echo $_POST ['endereco']?>> 
<input type="text" class="config2" name="complemento" value=<?php echo $_POST ['complemento']?>>
</div>

<div class="nomedados2">
<div id="nomecidade"><p>Bairro</p></div>
<div id="nomeestado"><p>Município</p></div>
<div id="nomecep"><p>CEP</p></div>
</div>

<div class="dados">
<input type="text" class="config2" name="bairro" value=<?php echo $_POST ['bairro']?>> 
<input type="text" class="config2" name="municipio" value=<?php echo $_POST ['municipio']?>>
<input type="text" class="config2" name="cep" value=<?php echo $_POST ['cep']?> >
</div>

<div id="layoutbotao">
<input type="submit" value="Atualizar dados" id="botao">
</div>
</form>
 
</div>
</div>

</body>
</html>

<?php

 include_once ("footer.php");

?>










