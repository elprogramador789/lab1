<?php

require_once("Autor.php");
require_once("Libro.php");
require_once("Revista.php");

$autorElenaWHite = new Autor("Elena G. de White", "Americana");

$Anelis = new Autor("Anelis", "Argentina");
$leo = new Autor("Leo", "Española");
$gustavo = new Autor("gustavo", "Española");

$libro1 = new Libro("El Camino a Cristo", 1892, $autorElenaWHite);
$libro2 = new Libro("La Educación", 1903, $autorElenaWHite);

$revista1 = new Revista("Revista Adventista", 2023, $autorElenaWHite, 1, 1);
$revista2 = new Revista("Revista Vida y Salud", 2023, $autorElenaWHite, 1, 1);
$publicables = [
    $libro1,
    $libro2,
    $revista1,
    $revista2
];

foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}