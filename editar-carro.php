<?php include('header.php') ?>

<?php include('navbar.php') ?>

<?php include('cadastrar-carro.db.php') ?>

<?php
if (isset($_GET['id'])):
    $id = mysqli_escape_string($con, $_GET['id']); 
    $sql = "SELECT * FROM veiculos WHERE id = '$id'";
    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark">Cadastrar Carros</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center text-secondary">Editar Carros</h3>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                <div class="form-group">
                    <input type="text" name="carro" class="form-control" placeholder="marca do carro" value="<?php echo $dados['carro']; ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="modelo" class="form-control" placeholder="nome do carro" value="<?php echo $dados['modelo']; ?>" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="editar" class="btn btn-secondary btn-block">Atualizar</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
        <?php 
            $sql = mysqli_query($con, "SELECT * FROM veiculos");
        ?>
            <h3 class="text-center text-secondary">Lista de Carros</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Marca do carro</th>
                        <th>Nome do carro</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?php echo $row['carro']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td>
                            <a href="editar-carro.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Editar</a>
                            <a href="cadastrar-carro.php?excluir= <?php echo $row['id']; ?> " class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>