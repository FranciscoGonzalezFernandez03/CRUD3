<?php
require_once "autoload.php";
$miBiblioteca=new GestorPublicacion();

for ($i=1; $i<=25; $i++){//Libros
    $libro=new Libro(($i*2)+1, "editorial$i", $i*5);
    $miBiblioteca->anyadir($libro);
}
for ($i=1; $i<=25; $i++){//Revistas
    $revista=new Revista($i*2, rand(0,1), "tematica$i");
    $miBiblioteca->anyadir($revista);
}

var_dump($miBiblioteca);

$miBiblioteca->actualizarLibro(3, "ACTULIZADO", 0);
$miBiblioteca->actualizarRevista(2, "ACTULIZADA", "ACTULIZADO");

var_dump($miBiblioteca);

$miBiblioteca->eliminar(20);
$miBiblioteca->eliminar(21);

var_dump($miBiblioteca);
?>