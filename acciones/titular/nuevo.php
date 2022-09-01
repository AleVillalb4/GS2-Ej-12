<?php
require_once '';
$json = file_get_contents('php://input', true);
$req = json_decode($json);

$resp = new NuevoResponse();

$IsOk = true;

if ($req->Titular->Direccion == null) {
    $resp->IsOk = false;
    $resp->Mensaje = 'La direccion es obligatoria';
}
if ($req->Titular->NroDocumento == null) {
    $resp->IsOk = false;
    $resp->Mensaje = 'El Apellido y Nombre es obligatorio';
}
if ($req->Titular->ApellidoNombre == null) {
    $resp->IsOk = false;
    $resp->Mensaje = 'El Numero de Documento es obligatorio';
} 

if ($IsOk = true){ 
    $resp->Mensaje = 'Titular agregado correctamente';
}else if ($req->Titular->Direccion == null) {
    $resp->IsOk = false;
    $resp->Mensaje = 'La direccion es obligatoria-';
}else if ($req->Titular->NroDocumento == null) {
    $resp->IsOk = false;
    $resp->Mensaje= $resp->Mensaje .'El Apellido y Nombre es obligatorio-';
}else if ($req->Titular->ApellidoNombre == null){ 
     $resp->Mensaje = $resp->Mensaje . '-El Numero de Documento es obligatorio';
} 