<html lang="es">
	<head> 
		<title>Datos SAI</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="css/estilos.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</head>
	<body>
		<header>
			<div class="alert alert-info">
            <h2>Almacén Vallejo</h2>
			<h3>Insertar Hoja del SAI a la Base de Datos</h3>
			</div>
		</header>
<br>
<br>
        <div align="center"><img src="./img/imss.png" width="200" height="200"></div>
<br>
<br>
<br>
<br>
<br>
<br>



        <form action="files.php" method="post" enctype="multipart/form-data" id="filesForm">
            <div class="col-md-4 offset-md-4">
                <input class="form-control" type="file" name="fileContacts" >
                <button type="button" onclick="uploadContacts()" class="btn btn-primary form-control" >Cargar</button>
            </div>
        </form>

</body>
</html>

<script type="text/javascript">

    function uploadContacts()
    {

        var Form = new FormData($('#filesForm')[0]);
        $.ajax({

            url: "import.php",
            type: "post",
            data : Form,
            processData: false,
            contentType: false,
            success: function(data)
            {
                alert('Registros Agregados!');
            }
        });
    }

</script>