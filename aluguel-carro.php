<?php include('header.php') ?>

<?php include('navbar.php') ?>

<?php include('aluguel-carro.db.php') ?>


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
            <form action="aluguel-carro.db.php" method="post" enctype="multipart/form-data">
                <select name="carro" class="form-control">
                    <?php

                        $sql = mysqli_query($con, "SELECT * FROM veiculos ORDER BY modelo ASC");

                        while ($dados = mysqli_fetch_array($sql)) {
                        echo ("<option value='" .$dados['modelo']. "'>" .$dados['modelo']."</option>");
                        }
                    
                    ?>
                </select>
                <br>

                <select name="cliente" class="form-control">
                    <?php

                    $sql = mysqli_query($con, "SELECT * FROM cliente ORDER BY nome ASC");

                    while ($dados = mysqli_fetch_array($sql)) {
                    echo ("<option value='" .$dados['nome']. "'>" .$dados['nome']."</option>");
                    }

                    ?>
                </select>
                <br>

               
                <br>
                <label>Data Saída: </label>
                <input type="date" name="data_saida">

                <label>Hora Saída: </label>
                <input type="time" name="hora_saida"><br>
                

                <br>
                <button type="submit" name="adicionar" class="btn btn-secondary btn-block">Adicionar</button>
                <br>
            </form>
        </div>
        <div class="col-md-8">
        <?php 
            $sql = mysqli_query($con, "SELECT * FROM aluguel");
        ?>
            <h3 class="text-center text-secondary">Lista de Clientes</h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Carro</th>
                        <th>Cliente</th>
                        <th>Dia</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?php echo $row['carro']; ?></td>
                        <td><?php echo $row['cliente']; ?></td>
                        <td><?php echo $row['data_saida']; ?></td>
                        <td><?php echo $row['hora_saida']; ?></td>
                        <td>
                            
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php') ?>