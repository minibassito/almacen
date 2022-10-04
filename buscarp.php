<?php
include("cn.php");

$usuariosd = "SELECT nombremedico, esp, usuario, statusreceta, dif, var1 FROM `datos` WHERE statusreceta = 'P';";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Estatus Receta P</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- styles itic -->
    <link rel="stylesheet" href="css/estilofiltrado.css">

</head>
<body>

<div class="container offset-md-2 col-md-8">
    <header class="main-header">
        <h4>
            <span class="icon-title">
                <i class="fas fa-filter"></i>
            </span>
            Filtro Estatus Receta P
        </h4>
    </header>
    <br>
    <form action="filtrado.php" method="post" enctype="multipart/form-data" id="filesForm">
            
    <a href="../almacen/filtrado.php">
        <button type="button" class="btn btn-primary form-control" >Regresar</button>
    </a>
            <br><br><br>
        </div>
    </form>
    <table class="table table-bordered table-hover">
        <thead class="bg-gray">
        <tr>
            <th>Médico</th>
            <th>Esp</th>
            <th>Usuario Farmacia</th>
            <th>Status Receta</th>
            <th>Dif</th>
            <th>Var</th>  
        </tr>
        </thead>
        <?php 
        
        $resultado =mysqli_query($connect, $usuariosd);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <th><?php echo $row["nombremedico"];?></th>
            <th><?php echo $row["esp"];?></th>
            <th><?php echo $row["usuario"];?></th>
            <th><?php echo $row["statusreceta"];?></th>
            <th><?php echo $row["dif"];?></th>
            <th><?php echo $row["var1"];?></th>  
        </tr>
        <?php } mysqli_free_result($resultado);?>
        <tbody id="filters-result" class="bg-white">

        </tbody>
    </table>
    <br>
    <br>
    <br>
    
</div>


</body>
</html>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="assets/js/users.js"></script>


