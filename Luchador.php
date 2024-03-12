<?php
class Luchador {
    private $nombre;
    private $vida;
    private $fuerza;
    private $defensa;

    public function __construct($nombre, $fuerza, $defensa) {
        $this->nombre = $nombre;
        $this->vida = 10;
        $this->fuerza = $fuerza;
        $this->defensa = $defensa;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getFuerza() {
        return $this->fuerza;
    }

    public function getDefensa() {
        return $this->defensa;
    }

    public function atacar() {
        return rand(1, $this->fuerza);
    }

    public function recibirDano($dano) {
        $this->vida -= $dano;
        $this->vida = max(0, $this->vida);
        $this->vida = min(10, $this->vida);
    }
}