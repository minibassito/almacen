<?php
include("cn.php");

$con = mysqli_connect("localhost","root","","farmacia");
mysqli_set_charset($connect, "utf8");

$restotal = $con->query("SELECT * FROM datos");
$cnt = $restotal->num_rows;

$res3258 = $con->query("SELECT * FROM `datos` WHERE esp = '3258';");
$cnt3258 = $res3258->num_rows;
$total3258 = $cnt3258*100/$cnt;

$res3204 = $con->query("SELECT * FROM `datos` WHERE esp = '3204';");
$cnt3204 = $res3204->num_rows;
$total3204 = $cnt3204*100/$cnt;

$res5186 = $con->query("SELECT * FROM `datos` WHERE esp = '5186';");
$cnt5186 = $res5186->num_rows;
$total5186 = $cnt5186*100/$cnt;

while($fila3258 = $res3258->fetch_array(MYSQLI_BOTH)){
    $A3258 = "{ name:'".$fila3258['esp']."', y:".$total3258."},";
}

while($fila3204 = $res3204->fetch_array(MYSQLI_BOTH)){
    $A3204 = "{ name:'".$fila3204['esp']."', y:".$total3204."},";
}

while($fila5186 = $res5186->fetch_array(MYSQLI_BOTH)){
    $A5186 = "{ name:'".$fila5186['esp']."', y:".$total5186."},";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gráfica 3258</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- styles itic -->
    <link rel="stylesheet" href="css/estilofiltrado.css">
    <script src="./code/highcharts.js"></script>
    <script src="./code/modules/exporting.js"></script>
    <script src="./code/modules/export-data.js"></script>
    <script src="./code/modules/accessibility.js"></script>
    <script type="text/javascript">
// Data retrieved from https://netmarketshare.com
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Gráfica ESP 3258'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'ESP',
        colorByPoint: true,
        data: [
            <?php
            echo $A3258;
            echo $A3204;
            echo $A5186;
            ?>
        ]
    }]
});

		</script>

</head>
<body>

<div class="container offset-md-2 col-md-8">
    <header class="main-header">
        <h4>
            <span class="icon-title">
                <i class="fas fa-filter"></i>
            </span>
            Gráfica ESP 3258
        </h4>
    </header>
    <br>
    <form action="filtrado.php" method="post" enctype="multipart/form-data" id="filesForm">
            
    <a href="../almacen/3258.php">
        <button type="button" class="btn btn-primary form-control" >Regresar</button>
    </a>
            <br><br><br>
        </div>
    </form>
    <script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Datos cargados desde SAI.
    </p>
</figure>



		<script type="text/javascript">
// Data retrieved from https://netmarketshare.com
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'ESP'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'ESP',
        colorByPoint: true,
        data: [
            <?php
            echo $A3258;
            echo $A3204;
            echo $A5186;
            ?>
        ]
    }]
});

		</script>


</body>
</html>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="assets/js/users.js"></script>


