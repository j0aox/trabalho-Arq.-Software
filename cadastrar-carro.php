<?php include('header.php') ?>

<?php include('navbar.php') ?>

<?php include('cadastrar-carro.db.php') ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark">Cadastrar Carros</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-center text-secondary">Adicionar Carro</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="carro" class="form-control" placeholder="marca do carro" required>
                </div>
                <div class="form-group">
                    <input type="text" name="modelo" class="form-control" placeholder="nome do carro" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="adicionar" class="btn btn-secondary btn-block">Adicionar</button>
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