<?php

require 'src/Craps.php';



use PHPUnit\Framework\TestCase;

class Desafio4 extends TestCase
{
    public function testSomaPontuacoes()
    {
        $craps = new Craps();
        

        $craps->setDados(new Dado(2), new Dado(3));
        $craps->lancarDados();
        $soma1 = $craps->getSoma1();
        $expectedSoma1 = 5;
        $this->assertEquals($expectedSoma1, $soma1);

        $craps->setDados(new Dado(4), new Dado(6));
        $craps->lancarDados();
        $soma2 = $craps->getSoma2();
        $expectedSoma2 = 10;
        $this->assertEquals($expectedSoma2, $soma2);
    }

    
}
