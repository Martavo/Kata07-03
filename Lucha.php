<?php
class Lucha {

    public function __construct(private Luchador $luchador1, private Luchador $luchador2) {
        
    }

    public function pelear(): void  {
        while ($this->luchador1->getVida() > 0 && $this->luchador2->getVida() > 0) {
            $this->realizarAtaque($this->luchador1, $this->luchador2);
            $this->realizarAtaque($this->luchador2, $this->luchador1);
        }

        $ganador = $this->verificarGanador();
        echo $ganador->getNombre() . " ha ganado la batalla!";
    }

    private function realizarAtaque(Luchador $atacante, Luchador $defensor) : void {
        if (rand(1, 10) <= 7) {
            $dano = max(1, $atacante->atacar() - $defensor->getDefensa()); 
            $defensor->recibirDano($dano);
        }
    }

    private function verificarGanador(): Luchador {
        return $this->luchador1->getVida() <= 0 ? $this->luchador2 : $this->luchador1;
    }
}