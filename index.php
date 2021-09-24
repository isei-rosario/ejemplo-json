<?php
header('Content-Type: application/json');
require_once 'modelo/direccion.php';
require_once 'modelo/persona.php';

$p = new Persona();
$p->Nombre = "Luciano";
$p->Apellido = "Pecovich";

$d = new Direccion();
$d->Calle ="Ayolas";
$d->Numero = "123";

$p->Direcion = $d;

echo json_encode($p);