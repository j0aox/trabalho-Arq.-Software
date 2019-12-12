<?php include('header.php') ?>

<?php include('navbar.php') ?>

<?php include('cadastrar-cliente.db.php') ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark">Cadastrar Clientes</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center text-secondary">Adicionar Cliente</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <select class="form-control">
                    <?php

                        $sql = mysqli_query($con, "SELECT * FROM veiculos ORDER BY modelo ASC");

                        while ($dados = mysqli_fetch_array($sql)) {
                        echo ("<option value='" .$dados['modelo']. "'>" .$dados['modelo']."</option>");
                        }
                    
                    ?>
                </select>
                <br>

                <select class="form-control">
                    <?php

                    $sql = mysqli_query($con, "SELECT * FROM cliente ORDER BY nome ASC");

                    while ($dados = mysqli_fetch_array($sql)) {
                    echo ("<option value='" .$dados['nome']. "'>" .$dados['nome']."</option>");
                    }

                    ?>
                </select>
                <br>
                <button type="submit" name="" class="btn btn-secondary btn-block">Adicionar</button>
                <br>
            </form>
        </div>
        <div class="col-md-8">
        <?php 
            //$sql = mysqli_query($con, "SELECT * FROM cliente");
        ?>
            <h3 class="text-center text-secondary">Lista de Clientes</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Carro</th>
                        <th>Cliente</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php //while($row = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?php // echo $row['nome']; ?></td>
                        <td><?php // echo $row['sexo']; ?></td>
                        <td>
                            <a href="editar-cliente.php?id=<?php // echo $row['id']; ?>" class="btn btn-success">Editar</a>
                            <a href="cadastrar-cliente.php?excluir= <?php // echo $row['id']; ?> " class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php //} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>