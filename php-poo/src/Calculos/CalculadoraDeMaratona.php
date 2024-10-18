<?php

class CalculadoraDeMaratona
{
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void 
    {
       $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }
}
