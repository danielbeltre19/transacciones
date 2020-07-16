<?php

class estudiante{

public $id;
public $monto;
public $fecha;
public $descripcion;
private $servicio;

public function __construct(){
    
    $this->servicio= new Servicio();
}

public function iniciodatos($id,$monto,$fecha,$descripcion){
    
    $this->id=$id;
    $this->monto=$monto;
    $this->fecha=$fecha;
     $this->descripcion=$descripcion;
       
}

public function set($data){
    foreach ($data as $key => $value)$this->{$key} = $value;
}

function getcarrera(){

    if($this->carreraid !=0 && $this->carreraid != null){
        
        return $this->servicio->carrera[$this->carreraid];
    }

}


}



?>