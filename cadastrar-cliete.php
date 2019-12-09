<?php include('header.php') ?>

<?php include('navbar.php') ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark">Cadastrar Clientes</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="cliente" class="form-control" placeholder="nome do cliente" required>
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
                    <input type="submit" name="adicionar" class="btn btn-secondary btn-block">
                </div>
            </form>
        </div>
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include('footer.php') ?>