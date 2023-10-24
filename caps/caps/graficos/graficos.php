<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "capss"; 
    
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    $x = 0;
    $y = 0; 

    // percorre o banco 
    $result_niveis_ava = "SELECT * FROM paciente";
    $resultado_niveis_ava = mysqli_query($conexao, $result_niveis_ava);
    while ($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
      if($row_niveis_ava['GENERO'] == "Masculino"){
        $x++;
      } else if($row_niveis_ava['GENERO'] == "Feminino"){
        $y++;
    }
}
?>
<!-- Página HTML -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Gráfico de Pacientes</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gênero', 'Quantidade'],
          ['Masculino', <?=$x?>],
          ['Feminino',  <?=$y?>]
        ]);

        var options = {
          title: 'Distribuição de Pacientes por Gênero',
          backgroundColor: { fill:'transparent' },
          titleTextStyle: { color: '#fff' },
          legendTextStyle: { color: '#fff' },
          pieSliceTextStyle: { color: '#fff' },
          slices: {
            0: { color: '#0099e6' },
            1: { color: '#ff66b2' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" href="graficos.css">
  </head>
  <body style="background: #0050d5; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <h1 style="color: #fff;">Gráfico de Pacientes por Gênero</h1>
    <div id="piechart" style="width: 600px; height: 400px;"></div>
    <div class="back-button" style="margin-top: 20px;">
    <button style="background-color: #0099e6;"><a href="../home/home.php" style="color: #fff; text-decoration: none;">Voltar</a></button>
    </div>
  </body>
</html>
