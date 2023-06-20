<?php

include 'src/Craps.php';


use PHPUnit\Framework\TestCase;

class Desafio3 extends TestCase
{
    public function testRound2()
    {
        $craps = new Craps();
        
        // Teste para vitória
        $craps->setDados(new Dado(3), new Dado(4)); // Soma 7, mesma soma da rodada 1
        $craps->round2();
        $this->assertEquals(statusGanhador::WON, $craps->getStatusGanhador());
        
        $craps->setDados(new Dado(5), new Dado(5)); // Soma 10, mesma soma da rodada 1
        $craps->round2();
        $this->assertEquals(statusGanhador::WON, $craps->getStatusGanhador());

        // Teste para derrota
        $craps->setDados(new Dado(1), new Dado(6)); // Soma 7, diferente da soma da rodada 1
        $craps->round2();
        $this->assertEquals(statusGanhador::LOST, $craps->getStatusGanhador());
        
        $craps->setDados(new Dado(4), new Dado(4)); // Soma 8, diferente da soma da rodada 1
        $craps->round2();
        $this->assertEquals(statusGanhador::CONTINUE, $craps->getStatusGanhador());
    }

    
}
