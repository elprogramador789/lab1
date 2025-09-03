<?php

require_once("Autor.php");
require_once("Libro.php");
require_once("IPublicable.php");

class Revista implements IPublicable {
    private string $titulo;
    private Autor $autor;
    private int $anio;
    private int $volumen;
    private int $numero;

    public function __construct(string $titulo, int $anio, Autor $autor, int $volumen, int $numero) {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
        $this->volumen = $volumen;
        $this->numero = $numero;
    }

    public function getInfo(): string {
        return "Revista: {$this->titulo} ({$this->anio}) - Autor: " . $this->autor->getNombre() . " - Volumen: {$this->volumen} - Número: {$this->numero}";
    }
}