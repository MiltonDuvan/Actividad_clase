<?php
require_once("01_Persona.php");

class Profesor extends Persona{

    public $asignatura;

    function __construct($vr_nombre,$vr_celular,$vr_email,$vr_asignatura)
    {
        parent:: __construct($vr_nombre,$vr_celular,$vr_email);
        $this->asignatura=$vr_asignatura;
    }

    function getAsignatura(){
        return $this->asignatura;
    }

   /* function getDatosPersona()
    {
        return $this->getDatosPersona();
    }*/
}//end

?>