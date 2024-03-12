<?php
class Lucha {

    public function __construct(private Luchador $luchador1, private Luchador $luchador2) {
        
    }

    public function pelear() {
        while ($this->luchador1->getVida() > 0 && $this->luchador2->getVida() > 0) {
            $this->realizarAtaque($this->luchador1, $this->luchador2);
            $this->realizarAtaque($this->luchador2, $this->luchador1);
        }

        $ganador = $this->luchador1->getVida() <= 0 ? $this->luchador2 : $this->luchador1;
        echo $ganador->getNombre() . " ha ganado la batalla!";
    }

    private function realizarAtaque(Luchador $atacante, Luchador $defensor) {
        $exito = rand(1, 10) <= 7;
        
        if ($exito) {
            $dano = $atacante->atacar() - $defensor->getDefensa();
            $dano = max(1, $dano); 
            $defensor->recibirDano($dano);
        }
    }
}