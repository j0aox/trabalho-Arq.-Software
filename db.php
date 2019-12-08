<?php
    session_start();

    $nome = "";
    $email = "";
    $erros = array();

    // conectando a base de dados
    $con = mysqli_connect('localhost', 'root', '', 'sistema');

    if (isset($_POST['registrar'])) {
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);
        $senha_2 = mysqli_real_escape_string($con, $_POST['senha_2']);

        if (empty($nome)) {
            array_push($erros, "Nome de usuário é obrigatório");
        }
        if (empty($email)) {
            array_push($erros, "E-mail é obrigatório");
        }
        if (empty($senha)) {
            array_push($erros, "Senha é obrigatório");
        }
        if ($senha != $senha_2) {
            array_push($erros, "As senhas são diferentes");
        }

        // se não houver erros, salva na base de dados
        if (count($erros) == 0) {
            $senha_cript = md5($senha);
            $sql = "INSERT INTO usuario (nome, email, senha) 
                    VALUES ('$nome', '$email', '$senha_cript')";
            mysqli_query($con, $sql);
            $_SESSION['nome'] = $nome;
            $_SESSION['success'] = "BEM VINDO";
            header('location: dashboard.php');
        }
    }

    // entrar
    if (isset($_POST['login'])) {
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);

        if (empty($nome)) {
            array_push($erros, "Nome de usuário é obrigatório");
        }
        if (empty($senha)) {
            array_push($erros, "Senha é obrigatório");
        }

        if (count($erros) == 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
            //$res = mysqli_query($con, $sql);
            if (mysql_num_rows($con, $sql)) {
                $_SESSION['nome'] = $nome;
                $_SESSION['success'] = "BEM VINDO";
                header('location: dashboard.php');
            } 
            else {
                array_push($erros, "Usuário ou Senha incorretos");
                header('location: index.php');
            }
        }
    }

    // sair
    if (isset($_GET['sair'])) {
        session_destroy();
        unset($_SESSION['nome']);
        header('location: index.php');
    }
?>