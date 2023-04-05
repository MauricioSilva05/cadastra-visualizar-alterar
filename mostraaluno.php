<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostraaluno.css">
    <link rel="shortcut icon" href=".//download (1).png" type="image/x-icon">
    <title>Mostra Usuário</title>
</head>
<body>

<div class="container">


<div class="main">

<div class="main1">
    <h2>Detalhes dos Dados</h2>
    <h2>Dados obtidos</h2>
</div>

<table>
    <tr>
        <th>Nome completo</th>
    <td>
        <?php
        echo $_POST ['nome']
        ?>
    </td>
    </tr>

    <tr>
        <th>RG</th>
    <td>
        <?php
        echo $_POST ['rg']
        ?>
    </td>
    </tr>

    <tr>
        <th>Órgão de expedição</th>
    <td>
        <?php
        echo $_POST ['orgaoexpe']
        ?>
    </td>
    </tr>

    <tr>
        <th>CPF</th>
    <td>
        <?php
        echo $_POST ['cpf']
        ?>
    </td>
    </tr>

    <tr>
        <th>Telefone</th>
    <td>
        <?php
        echo $_POST ['telefone']
        ?>
    </td>
    </tr>

    <tr>
        <th>Email</th>
    <td>
        <?php
        echo $_POST ['email']
        ?>
    </td>
    </tr>

    <tr>
        <th>Curso</th>
    <td>
        <?php
        echo $_POST ['cursos1']
        ?>
    </td>
    </tr>

    <tr>
        <th>Número de matrícula</th>
    <td>
        <?php
        echo $_POST ['matricula']
        ?>
    </td>
    </tr>

    <tr>
        <th>Endereço</th>
    <td>
        <?php
        echo $_POST ['endereco']
        ?>
    </td>
    </tr>

    <tr>
        <th>Complemento</th>
    <td>
        <?php
        echo $_POST ['complemento']
        ?>
    </td>
    </tr>

    <tr>
        <th>Bairro</th>
    <td>
        <?php
        echo $_POST ['bairro']
        ?>
    </td>
    </tr>

    <tr>
        <th>Município</th>
    <td>
        <?php
        echo $_POST ['municipio']
        ?>
    </td>
    </tr>

    <tr>
        <th>CEP</th>
    <td>
        <?php
        echo $_POST ['cep']
        ?>
    </td>
    </tr>


</table>

<form action="edit.php" method="post">

<div id="layoutbotao">
<input type="submit" value="Editar" id="botao">
</div>


<input type="hidden" name="nome" value=<?php echo $_POST ['nome']?>>
<input type="hidden" name="rg" value=<?php echo $_POST ['rg']?>>
<input type="hidden" name="orgaoexpe" value=<?php echo $_POST ['orgaoexpe']?>>
<input type="hidden" name="cpf" value=<?php echo $_POST ['cpf']?>>
<input type="hidden" name="telefone" value=<?php echo $_POST ['telefone']?>>
<input type="hidden" name="email" value=<?php echo $_POST ['email']?>>
<input type="hidden" name="cursos1" value=<?php echo $_POST ['cursos1']?>>
<input type="hidden" name="matricula" value=<?php echo $_POST ['matricula']?>>
<input type="hidden" name="endereco" value=<?php echo $_POST ['endereco']?>>
<input type="hidden" name="complemento" value=<?php echo $_POST ['complemento']?>>
<input type="hidden" name="bairro" value=<?php echo $_POST ['bairro']?>>
<input type="hidden" name="municipio" value=<?php echo $_POST ['municipio']?>>
<input type="hidden" name="cep" value=<?php echo $_POST ['cep']?>>

</form>

</div>
</div>

</body>
</html>