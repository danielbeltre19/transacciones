<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Editar</title>


    <link href="css.css" rel="stylesheet" type="text/css">
    <link href="css.css" rel="stylesheet" type="text/css">

</head>

<body>
    <header>


        </div>
        </div>
        </div>
        <div class="navbar navbar-dark bg-info shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">

                    <strong>Inicio</strong>
                </a>

                </button>
            </div>
        </div>
    </header>


    <?php

 require_once 'servicio.php';
  require_once 'clases.php';
  require_once 'Iserviciobase.php';
  require_once 'servidorcookie.php';
   require_once 'IFileHandler.php';
    require_once 'JsonFileHandler.php';
      require_once 'servidorfile.php';
       require_once 'serializationFileHandler.php';
       require_once 'JsonFileHandlercsv.php';
       include 'log.php';

  $service = new servidorfile();
  $servicio=new Servicio();
  
  if(isset($_GET['id'])){

$estudianteid=$_GET['id'];
$elemento=$service->GetByid($estudianteid);
 

if (isset($_POST['monto']) && isset($_POST['fecha']) && isset($_POST['descripcion'])) {
$log="Trasaccion editada del ID($estudianteid) ";
logger($log);
   $actualizar=new estudiante();
   $actualizar->iniciodatos($estudianteid, $_POST['monto'], $_POST['fecha'], $_POST['descripcion']);
    
  $service->editar($estudianteid,$actualizar);

    header("location: index.php");
    exit();

  }
  }else{


 header("location: index.php");
    exit();

  }

  ?>

    <main role="main">

        <div class="row"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6 form">

            <div class="card">
                <div class="card-header">
                    Editar Transaccion
                </div>
                <div class="card-body">

                    <form enctype="multipart/form-data" action="editar.php?id=<?php echo $elemento->id; ?>"
                        method="post">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" value=<?php echo $elemento->id; ?> class="form-control " id="" name="id"
                                placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="monto">Monto</label>
                            <input type="text" value=<?php echo $elemento->monto; ?> class="form-control" id=""
                                name="monto" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="fech">Fecha</label>
                            <input type="text" value=<?php echo $elemento->fecha; ?> class="form-control" id=""
                                name="fecha" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="des">Descripcion</label>
                            <input type="text" value=<?php echo $elemento->descripcion; ?> class="form-control" id=""
                                name="descripcion" placeholder="">
                        </div>


                        <br>
                        <center>
                            <a href="index.php" class="btn btn-outline-secondary">Volver atras &nbsp;&nbsp; <i
                                    class="fas fa-reply-all"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-outline-success">Editar Transaccion &nbsp;&nbsp; <i
                                    class="fas fa-check"></i></button>
                        </center>

                </div>
                </form>
            </div>

        </div>
        </div>

        <div class="col-md-3"></div>
        </div>


    </main>


    <script src=" https://kit.fontawesome.com/96e239109c.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</body>

</html>