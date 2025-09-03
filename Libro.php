<?php
require_once("Autor.php");
require_once("IPublicable.php");

class Libro implements IPublicable {
    private string $titulo;
    private Autor $autor;
    private int $anio;

    public function __construct(string $titulo, int $anio, Autor $autor) {
        $this->titulo = $titulo;
        $this->autor  = $autor;
        $this->anio   = $anio;
    }

    public function getInfo(): string {
        return "LIBRO: {$this->titulo} ({$this->anio}) - Autor: " . $this->autor->getNombre();
    }
}