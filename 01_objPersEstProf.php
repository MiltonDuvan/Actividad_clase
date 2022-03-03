<?php
require_once("01_Persona.php");
require_once("01_Estudiante.php");
require_once("01_Profesor.php");

$objPersona=new Persona("Daniel Esteban",3138542122,"daniel@gmail.co");
echo "<h2> PERSONA</h2>";
print_r("<pre>");
print_r($objPersona);
print_r("</pre>");


echo "<h2> Estudiante</h2>";
$objEstudiante= new Estudiante("Edinson",10458963,"Edinson@mail.co",10);
print_r("<pre>");
print_r($objEstudiante);
print_r("</pre>");


echo "<h2> PROFESOR</h2>";
$objProfesor = new Profesor("Francisco",108752163,"Franciso@mail.co","Arquictetura de software");
print_r("<pre>");
print_r($objProfesor);
print_r("</pre>");
?>