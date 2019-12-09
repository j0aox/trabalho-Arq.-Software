<?php include('db.php') ?>

<?php 

//$sexo = $_POST['sexo'];
//$cliente = $_POST['cliente'];

if (isset($_POST['adicionar'])) {
    $cliente = mysqli_real_escape_string($con, $_POST['cliente']);
    $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
    $resultado = "INSERT INTO cliente (nome, sexo) VALUES ('$cliente', '$sexo')";
    $resul = mysqli_query($con, $resultado);
    header('location: cadastrar-cliente.php');
}



?>