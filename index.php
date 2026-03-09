<?php
require_once "autoload.php";
session_start();


// 1. Creamos la implementación concreta que queremos usar
$miGestor = new GestorPublicacion();
// 2. Se la pasamos al controlador
$controller = new PublicacionController($miGestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'crear':
        $controller->crear();
        break;
    case 'editarLibro':
        $controller->editarLibro();
        break;
    case 'editarRevista':
        $controller->editarRevista();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->index();
}








?>