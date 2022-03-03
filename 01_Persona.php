<?php

class Persona{

public $nombre;
private $celular;
public $email;

function __construct($vr_nombre,int $vr_celular,$vr_email)
{
    $this->nombre=$vr_nombre;
    $this->celular=$vr_celular;
    $this->email=$vr_email;
    
}

function getCelular(){
    return $this->celular;
}

function setCelular($vr_celular){
    $this->celular=$vr_celular;
}

function getDatosPersona(){
$arrayDatos= Array(
    'Nombre: '=>$this->nombre,
    'Celular: '=>$this->celular,
    'Email: '=>$this->email,
);



}


}





?>