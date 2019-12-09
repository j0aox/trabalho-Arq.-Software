<?php include('header.php') ?>

<?php include('navbar.php') ?>

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
            <form action="cadastrar-cliete.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="cliente" class="form-control" placeholder="nome do cliente">
                </div>
                <div class="form-group custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="sexo" value="M" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Masculino</label>
                </div>
                <div class="form-group custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="sexo" value="F" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Feminino</label>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-secondary btn-block">login</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
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
                    <tr>
                        <td>João Amador</td>
                        <td>Masculino</td>
                        <td>
                            <a href="#" class="btn btn-success">Editar</a>
                            <a href="#" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>