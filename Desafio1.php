<?php

include 'src/Dado.php';

use PHPUnit\Framework\TestCase;

class Desafio1 extends TestCase
{
    public function testFaceSorteadaInRange()
    {
        $dado = new Dado();
        $facesPossiveis = [1, 2, 3, 4, 5, 6];
        
        for ($i = 0; $i < 100; $i++) {
            $dado->lançarDado();
            $faceSorteada = $dado->getFaceSorteada();
            
            $this->assertContains($faceSorteada, $facesPossiveis);
        }
    }

    
}
