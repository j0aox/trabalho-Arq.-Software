<?php include('db.php') ?>

<?php

// adicionar o cliente na base de dados
if (isset($_POST['adicionar'])) {
    $cliente = mysqli_real_escape_string($con, $_POST['cliente']);
    $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
    $resultado = "INSERT INTO cliente (nome, sexo) VALUES ('$cliente', '$sexo')";
    $resul = mysqli_query($con, $resultado);
    header('location: cadastrar-cliente.php');
}

?>