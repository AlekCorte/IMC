<?php
    $nome = $_POST["nome"];
    $alturaEmCm = $_POST["altura"];
    $peso = $_POST["peso"];
    $altura = $alturaEmCm / 100;
    $imc = $peso / ($altura * $altura);


    if (isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        if ($imc < 18.5) {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está abaixo do peso.')";
            echo "</script>";
        } elseif ($imc < 25) {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está com o peso normal.')";
            echo "</script>";
        } elseif ($imc < 30) {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está acima do peso.')";
            echo "</script>";
        } elseif ($imc < 35) {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está com obesidade grau I.')";
            echo "</script>";
        } elseif ($imc < 40) {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está com obesidade grau II.')";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('Olá $nome, seu imc é $imc você está com obesidade grau III.')";
            echo "</script>";
        }
    } else {
            echo "<script type='text/javascript'>";
            echo "alert('Preencha todas as informações')";
            echo "</script>";
    }
?>