<?php

$mensagem = "";

if ($_POST) {
    $salario = $_POST['salario'];
    $transporte = $_POST['transporte'];
    $alimentacao = $_POST['alimentacao'];
    $luzeagua = $_POST['luz'];

    if (is_numeric($salario) && is_numeric($transporte) &&  is_numeric($alimentacao) && is_numeric($luzeagua)) {
        if (($salario > 0) && ($transporte > 0) && ($alimentacao > 0) && ($luzeagua > 0)) {

            $resto = $salario - $transporte - $alimentacao - $luzeagua;
            $resto = number_format($resto, 2, ',', '.');

            $mensagem .=  "<p>Sobram no final do més um total de R$" . $resto . "</p>";
            $mensagem .= "<p>O valor do salario é: R$" . $_POST['salario'] . "</P>";
            $mensagem .=  "<p>O valor do gasto com transporte  é: R$" . $_POST['transporte'] . "</P>";
            $mensagem .=  "<p>O valor com alimentação  é: R$" . $_POST['alimentacao'] . "</P>";
            $mensagem .=  "<p>O valor da luz e da aguá é: R$" . $_POST['luz'] . "</P>";
            $mensagem .=  'Dados validados';
        } else {
            $mensagem .= "Valores com o preenchimento numérico incorreto!
            (menor ou igual a zero)";
        }
    } else {
        $mensagem .= "<p>O valor recibido não é númerico";
    }
} else {
    $mensagem .= "<p>Nenhum dado foi recebido.</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<style>
    body {
        background-image: url(img/calculator-.jpg);
    }

    .painel {
        background-color: white;
        margin-left: 50px;
        border-style: solid;
        border-color: #D9EDF7;
        flex-grow: 1;
        border-radius: 8px;
        max-width: 500px;
        margin-top: 50px
    }

    a {
        margin-left: 50px;
    }
</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>

<body>
    <main>
        <div class="painel">
            <h2>Gastos do més</h2>
            <div class="for-group">
                <label><?= $mensagem ?></label>

            </div>
        </div>
        <br>
        <br>
        <a href="index.html" class="btn btn-primary">Voltar</a>
    </main>
</body>

</html>



