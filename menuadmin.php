<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL NAZARENITO</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Load the AJAX API-->
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
        data.addRows([
          ['Faja y Costal', 3],
          ['El Nazareno', 1],
          ['La Camara Cofrade', 1],
          ['Recuerdos', 1],
          ['Incienso', 2]
        ]);

        // Set chart options
        var options = {'title':'Secciones más usadas',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>

  </head>
  <style>
  body {
    background-image: url("imagenes/logotipo.png");
    background-color: #cccccc;
    background-size: 75%;
    background-repeat: no-repeat;
    overflow-x: hidden;
  }
  </style>
  <body>
    <?php
    session_start();
    if ($_SESSION["email"]==NULL) {
      header("Location: index.php");
    }
    ?>
    <br><br><br><br>
    <div class="container";>
<div class="form-group">
  <div class="col-sm-offset-0 col-sm-12">
  <body>
<div class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr_only">cambiar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="menuadmin.php"  class="navbar-brand">INICIO </a></div>

      <div class="collapse navbar-collapse navbar-ex1-collpase">
        <ul class="nav navbar-nav">
          <li><a href="costaleros/costaleroadmin.php">fAJA Y COSTAL</a></li>
          <li><a href="nazarenos/nazarenoadmin.php">EL NAZARENO </a></li>
<li><a href="audiovisual/audioadmin.php">LA CAMARA COFRADE </a></li>
<li><a href="llaveros/llaverosadmin.php">RECUERDOS </a></li>
<li><a  href="incienso/inciensoadmin">INCIENSO </a></li>
<li><a  href="paneladmin.php">ADMINISTRACION</a></li>
<li><a  href="generapdf.php">PDF</a></li>
<li><a class="btn btn-default" href="logout.php">Cerrar Sesion</a></li>
</div>
</div>
<div class="text-center">
  <h1>BIENVENIDO A LA WEB EL NAZARENITO</h1>

<img width="50%" height="60%" src="imagenes/gif.gif" alt="gif"/>
<center><div id="chart_div"></div></center>
</div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>

</body>
</html>
