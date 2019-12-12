<?php include('header.php') ?>
    
<?php include('navbar.php') ?>
    
<?php include('footer.php') ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    // pegando datat e hora local
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i:s');
    echo $data . "  ". $hora;


    include ('db.php');

    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query($con, $sql);

    $masculino = 0;
    $feminino = 0;

    while ($linha = mysqli_fetch_assoc($resultado))
    {
        if ($linha['sexo'] == 'M')
            $masculino++;
        else if ($linha['sexo'] == 'F')
            $feminino++;
    }

    ?>
    

    <div id="piechart" style="width: 900px; height: 500px;"></div>


   
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['SExo', 'Quantidade'],
          ['Masculino',     <?php echo $masculino; ?>],
          ['Feminino',      <?php echo $feminino; ?>]
        ]);

        var options = {
          title: 'Gráfico por sexo'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>