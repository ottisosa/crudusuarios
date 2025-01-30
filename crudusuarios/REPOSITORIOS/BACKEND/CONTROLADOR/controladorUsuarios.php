<?php
require_once '../MODELO/modeloUsuarios.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":

        agregarUsuario();

        break;
    case "eliminar":

        eliminarUsuario();

        break;
    case "obtener":

        obtenerUsuarios();
        
        break;

    case "modificar":

        modificarUsuario();

        break;
}


function obtenerUsuarios()
{
    $resultado = (new usuario())->obtenerUsuarioModelo();
   echo json_encode($resultado);
    
}

function agregarUsuario()
{
    $ci = $_POST['ci']; 
    $nombre= $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $resultado = (new usuario())->crearUsuarioModelo($ci,$nombre, $apellido);
    echo json_encode($resultado);
}

function eliminarUsuario()
{
    $ci = $_POST['ci'];
    $resultado = (new usuario())->eliminarUsuarioModelo($ci);
    echo json_encode($resultado);
}

function modificarUsuario()
{
    $ci = $_POST['ci'];
    $nombre= $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $resultado = (new usuario())->modificarUsuarioModelo($ci,$nombre,$apellido);
    echo json_encode($resultado);
}
