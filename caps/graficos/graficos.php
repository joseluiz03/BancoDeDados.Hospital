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
      }else if($row_niveis_ava['GENERO'] == "Feminino"){
        $y++;
    }}
?>
<!-- Grafico de pizza -->
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Masculino', <?=$x?>], //copia $x
          ['Feminino',  <?=$y?>] //copia $y 
        ]);

        var options = {
          title: 'Pacientes por gênero'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>


<!-- Grafico de colunas -->

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
      }else if($row_niveis_ava['GENERO'] == "Feminino"){
        $y++;
    }}
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],


        ["Copper", 8.94, "#b87333"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>


    <!-- botao pra home -->
    <div class="back-button" style="position: absolute; bottom: 10px; left: 10px;">
        <button><a href="../home/home.php">Voltar</a></button>
    </div>
  </body>
</html>

