<?php 

include 'statusGanhador.php';
include 'Dado.php';

class Craps{

    private Dado $dado1;
    private Dado $dado2;
    private int $soma1;
    private int $soma2;
    private statusGanhador $statusGanhador;

    public function __construct() 
    {
        $this->dado1 = new Dado();
        $this->dado2 = new Dado();
    }

    //Funções Set
    public function setDados(Dado $dado1, Dado $dado2)
    {
        $this->dado1 = $dado1;
        $this->dado2 = $dado2;
    }

    private function setStatusGanhador(statusGanhador $statusGanhador){
        $this->statusGanhador = $statusGanhador;
    }


    //Funções do jogo
    public function lancarDados()
    {
        $this->dado1->lançarDado();
        $this->dado2->lançarDado();
    }

    public function imprimeFacesSorteadas()
    {
        echo "Dado1: " . $this->dado1->getFaceSorteada() . PHP_EOL . "Dado2: " . $this->dado2->getFaceSorteada() . PHP_EOL;
    }

    public function play()
    {

        //Rodada número 1
        $this->lancarDados();
        $this->soma1 = $this->dado1->getFaceSorteada() + $this->dado2->getFaceSorteada();
        $this->round1();

        $this->imprimeFacesSorteadas();
        echo "Pontuação do jogador: $this->soma1" . PHP_EOL;

        if($this->statusGanhador == statusGanhador::WON)
        {
            echo "Vitória do jogador :)!"  . PHP_EOL;
            return;
        }
        else if($this->statusGanhador == statusGanhador::LOST)
        {
            echo "Vitória da casa :(" . PHP_EOL;
            return;
        }

        //Rodada número 2
        $count = 2;
        while ($this->statusGanhador == statusGanhador::CONTINUE)
        {
            echo PHP_EOL . "----------" . PHP_EOL;
            echo "O jogo continua :O" . PHP_EOL;
            echo "Rodada de número $count" . PHP_EOL;
            $this->lancarDados();
            $this->soma2 = $this->dado1->getFaceSorteada() + $this->dado2->getFaceSorteada();
            $this->round2();
            echo "Resultados dos dados: $this->soma2" . PHP_EOL;
            $count++;
        }

        if($this->statusGanhador == statusGanhador::WON)
        {
            echo "Vitória do jogador :)!"  . PHP_EOL;
            return;
        }
        else if($this->statusGanhador == statusGanhador::LOST)
        {
            echo "Vitória da casa :(" . PHP_EOL;
            return;
        }
    }

    

    public function round1()
    {
        if($this->soma1 == 7 or $this->soma1 == 11)
        {
            $this->statusGanhador = statusGanhador::WON;
        }
        else if($this->soma1 == 2 or $this->soma1 == 3 or $this->soma1 == 12)
        {
            $this->statusGanhador = statusGanhador::LOST;
        }
        else
        {
            $this->statusGanhador = statusGanhador::CONTINUE;
        }
    }

    public function round2()
    {
        if($this->soma1 == $this->soma2)
        {
            $this->statusGanhador = statusGanhador::WON;
            
        }
        else if($this->soma2 == 7)
        {
            $this->statusGanhador = statusGanhador::LOST;
        }
        else
        {
            $this->statusGanhador = statusGanhador::CONTINUE;
        }
    }


    public function getSoma1() : int
    {
        return $this->soma1 = $this->dado1->getFaceSorteada() + $this->dado2->getFaceSorteada();
        
       
    }

    public function getSoma2() : int
    {
        return $this->soma2 = $this->dado1->getFaceSorteada() + $this->dado2->getFaceSorteada();
        
       
    }

}