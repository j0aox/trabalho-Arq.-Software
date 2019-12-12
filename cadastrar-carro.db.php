<?php include('db.php') ?>

<?php

// adicionar o cliente na base de dados
if (isset($_POST['adicionar'])) {
    $carro = $_POST['carro'];
    $modelo = $_POST['modelo'];
    $resultado = "INSERT INTO veiculos (carro, modelo) VALUES ('$carro', '$modelo')";
    $resul = mysqli_query($con, $resultado);
    header('location: cadastrar-carro.php');
}

// excluindo o cliente da base de dados
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $resultado = "DELETE FROM cliente WHERE id='$id'";
    $resul = mysqli_query($con, $resultado);
    header('location: cadastrar-carro.php');
}

// editar cliente
if (isset($_POST['editar'])) {
    $cliente = $_POST['cliente'];
    $sexo = $_POST['sexo'];
    $id = $_POST['id'];

    $resul = "UPDATE cliente SET nome='$cliente', sexo='$sexo' WHERE id=$id";
    $resultado = mysqli_query($con, $resul);
    header('location: cadastrar-carro.php');
}
?>