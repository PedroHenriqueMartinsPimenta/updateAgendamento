<?php 
  include_once('../../php/conexao.php');
  session_start();
  if (isset($_SESSION['CPF']) && $_SESSION['PERMISSAO'] == 1) {
  $escola = $_SESSION['ESCOLA'];  
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=300">
  <title>Graficos</title>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        <?php 
          $sql = "";
        ?>
        data.addRows([
          <?php 
          $sql = "SELECT COUNT(RESERVA.CODIGO) AS RESULT, EQUIPAMENTO.DESCRICAO,RESERVA.EQUIPAMENTO_CODIGO FROM RESERVA INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO WHERE EQUIPAMENTO.ESCOLA_CODIGO = $escola GROUP BY EQUIPAMENTO_CODIGO ORDER BY RESULT DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>]

           <?php
         }else{
          ?>
            ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>],
          <?php
         }
          }
        ?>
        ]);

        // Set chart options
        var options = {'title':'Grafico de equipamentos mais ultilizados',
                       'width':700,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

          var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        <?php 
          $sql = "";
        ?>
        data.addRows([
          <?php 
          $mes = date('m');
          $ano = date('Y');
          $sql = "SELECT COUNT(RESERVA.CODIGO) AS RESULT, EQUIPAMENTO.DESCRICAO,RESERVA.EQUIPAMENTO_CODIGO FROM RESERVA INNER JOIN EQUIPAMENTO ON EQUIPAMENTO.CODIGO = RESERVA.EQUIPAMENTO_CODIGO WHERE MONTH(DATA_ULTILIZAR) = $mes AND YEAR(DATA_ULTILIZAR) = $ano AND EQUIPAMENTO.ESCOLA_CODIGO = $escola GROUP BY EQUIPAMENTO_CODIGO ORDER BY RESULT DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>]

           <?php
         }else{
          ?>
            ['<?php echo $row['DESCRICAO']?>', <?php echo $row['RESULT']?>],
          <?php
         }
          }
        ?>
        ]);

        // Set chart options
        var options = {'title':'Grafico de equipamentos mais ultilizados neste mês',
                       'width':700,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_mes'));
        chart.draw(data, options);

         var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        <?php 
          $sql = "";
        ?>
        data.addRows([
          <?php 
          $sql = "SELECT COUNT(*) AS TOTAL, USUARIO.NOME,USUARIO.SOBRENOME, RESERVA.USUARIO_CPF FROM RESERVA INNER JOIN USUARIO ON RESERVA.USUARIO_CPF = USUARIO.CPF WHERE MONTH(DATA_ULTILIZAR) = $mes AND USUARIO.ESCOLA_CODIGO = $escola GROUP BY RESERVA.USUARIO_CPF ORDER BY TOTAL DESC LIMIT 3";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
           ?>
              ['<?php echo $row['NOME']. " ".$row['SOBRENOME']?>', <?php echo $row['TOTAL']?>]

           <?php
         }else{
          ?>
           ['<?php echo $row['NOME']. " ".$row['SOBRENOME']?>', <?php echo $row['TOTAL']?>],
          <?php
         }
          }
        ?>
        ]);

        // Set chart options
        var options = {'title':'Grafico dos 3 usuários que mais agendaram neste mês',
                       'width':700,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_users'));
        chart.draw(data, options);


         var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        <?php 
          $sql = "";
        ?>
        data.addRows([
          <?php
          $mes = date('m') + 1;
          if ($mes > 12) {
            $mes = "01";
          } 
          $sql = "SELECT COUNT(CODIGO) AS TOTAL, OPNIAO FROM PESQUISA INNER JOIN USUARIO ON USUARIO.CPF = PESQUISA.USUARIO_CPF WHERE MONTH(VALIDADE) = $mes  AND YEAR(VALIDADE) = $ano AND USUARIO.ESCOLA_CODIGO = $escola GROUP BY OPNIAO ORDER BY TOTAL DESC";
          $query = mysqli_query($con, $sql);
          $i = 0;
          while ($row = mysqli_fetch_array($query)) {
            $i++;
            if($i == mysqli_num_rows($query)){
              if($row['OPNIAO'] == 0){
           ?>
              ["Não satisfaz", <?php echo $row['TOTAL']?>]

           <?php
         }else if($row['OPNIAO'] == 1){
             ?>
              ["Satisfaz", <?php echo $row['TOTAL']?>]

           <?php
         }
         }else{
            if($row['OPNIAO'] == 0){
           ?>
              ["Não satisfaz", <?php echo $row['TOTAL']?>],

           <?php
         }else if($row['OPNIAO'] == 1){
             ?>
              ["Satisfaz", <?php echo $row['TOTAL']?>],

           <?php
         }
         }
          }
        ?>
        ]);

        // Set chart options
        var options = {'title':'Grafico de satisfação dos usuários neste mês',
                       'width':700,
                       'height':700};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_avaliation'));
        chart.draw(data, options);
      
      }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div" align="center"></div>
    <div id="chart_div_mes" align="center"></div>
    <div id="chart_div_users" align="center"></div>
    <div id="chart_div_avaliation" align="center"></div>
  </body>
</body>
</html>
<?php 
    }else{
      header('location:../../');
    }
?>