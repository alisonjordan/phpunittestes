<?php

include 'src/Craps.php';


use PHPUnit\Framework\TestCase;

class Desafio2 extends TestCase
{
    public function testRound1()
    {
        $craps = new Craps();

        // Teste para vitória
        $craps->setDados(new Dado(6), new Dado(1)); // Soma 7
        $craps->round1();
        $this->assertEquals(statusGanhador::WON, $craps->getStatusGanhador());

        $craps->setDados(new Dado(5), new Dado(6)); // Soma 11
        $craps->round1();
        $this->assertEquals(statusGanhador::WON, $craps->getStatusGanhador());

        // Teste para derrota
        $craps->setDados(new Dado(1), new Dado(1)); // Soma 2
        $craps->round1();
        $this->assertEquals(statusGanhador::LOST, $craps->getStatusGanhador());

        $craps->setDados(new Dado(2), new Dado(4)); // Soma 6
        $craps->round1();
        $this->assertEquals(statusGanhador::CONTINUE, $craps->getStatusGanhador());
    }

    
}
