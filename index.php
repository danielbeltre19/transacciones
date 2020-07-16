<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Inicio</title>


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

                    <a href="log.txt" class="navbar-brand d-flex align-items-center">

                        <strong>Descargar archivos</strong>
                    </a>
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
  
  $service = new servidorfile();
  $servicio=new Servicio();

      $listaestudi = $service->Getlista();

if(!empty($listaestudi)){

if(isset($_GET['carreraid'])){

$listaestudi = $servicio->buscar($listaestudi,'carreraid',$_GET['carreraid']);


}

}


  ?>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container">
                <h1>Nueva Transaccion</h1>

                <p><a href="añadir.php" class="btn btn-outline-info my-2">Crear Transaccion &nbsp;&nbsp;&nbsp; <i
                            class="fas fa-paper-plane"></i></a></p>

            </div>

        </section>

        <div class="album py-5 bg-light">
            <div class="container">


                <div class="row">


                    <?php if (empty($listaestudi)) : ?>
                    <h3>No tiene ninguna Transaccion</h3>

                    <?php else : ?>

                    <?php foreach ($listaestudi as $estudiante) : ?>

                    <div class="col-md-4 ">
                        <div class="card border-success mb-4 letra" style="width: 18rem;">


                            <div class="card-body">
                                <p class="card-text"><i
                                        class="fas fa-id-card"></i>&nbsp;id:&nbsp;<?php echo $estudiante->id;?>
                                </p>

                                <p class="card-text"><i
                                        class="fas fa-money-check"></i>&nbsp;monto:&nbsp;<?php echo $estudiante->monto;?>
                                </p>

                                <p class="card-text"><i
                                        class="fas fa-calendar-alt"></i>&nbsp;fecha:&nbsp;<?php echo $estudiante->fecha;?>
                                </p>

                                <p class="card-text"><i
                                        class="fas fa-pen-alt"></i>&nbsp;descripcion:&nbsp;<?php echo $estudiante->descripcion;?>
                                </p>
                                <center>
                                    <a href="editar.php?id=<?php echo $estudiante->id; ?>" class="card-link">
                                        <span style="color: darkblue;"> &nbsp;&nbsp;<i class=" far
                                        fa-edit"></i> </span></a>

                                    <a href="elim.php?id=<?php echo $estudiante->id; ?>" class="card-link"
                                        onclick="return confirmar()">&nbsp;&nbsp;
                                        <span style="color: red;"> <i class="far fa-trash-alt"></i></span></a>
                                </center>



                            </div>
                        </div>
                    </div>




                    <?php endforeach; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>


    </main>

    <script type="text/javascript">
    function confirmar() {
        var respuesta = confirm("Seguro de que quieres Eliminar esta Transaccion?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
    </script>


    <script src="https://kit.fontawesome.com/96e239109c.js" crossorigin="anonymous"></script>

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