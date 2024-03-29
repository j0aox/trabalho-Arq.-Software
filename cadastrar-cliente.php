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
                <div class="form-group">
                    <input type="text" name="cliente" class="form-control" placeholder="nome do cliente" required>
                </div>
                <div class="form-group custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="sexo" value="M" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio1">Masculino</label>
                </div>
                <div class="form-group custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="sexo" value="F" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Feminino</label>
                </div>
                <div class="form-group">
                    <button type="submit" name="adicionar" class="btn btn-secondary btn-block">Adicionar</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
        <?php 
            $sql = mysqli_query($con, "SELECT * FROM cliente");
        ?>
            <h3 class="text-center text-secondary">Lista de Clientes</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                        <td>
                            <a href="editar-cliente.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Editar</a>
                            <a href="cadastrar-cliente.php?excluir= <?php echo $row['id']; ?> " class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>