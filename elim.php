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

$id=isset($_GET['id']);

if($id){
$log="Trasaccion Eliminada del ID ($id)";
logger($log);
    $estudianteid=$_GET['id'];
    $service->eliminar($estudianteid);


    
}

header("location: index.php");
exist();

?>