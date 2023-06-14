<?php


class Dado {

    private $faceSorteada;
    private $limiteMin;
    private $limiteMax;

    //Função construtora
    public function __construct(){
        $this->setFaceSorteada(1);
        $this->setLimiteMin(1);
        $this->setLimiteMax(6);
    }

    //Funções get
    public function getLimiteMinimo() : int
    {
        return $this->limiteMin;
    }

    public function getLimiteMaximo() : int
    {
        return $this->limiteMax;
    }

    public function getFaceSorteada() : int
    {
        return $this->faceSorteada;
    }

    //Funções set
    private function setLimiteMin(int $valor){
        $this->limiteMin = $valor;
    }

    private function setLimiteMax(int $valor){
        $this->limiteMax = $valor;
    }

    private function setFaceSorteada(int $valor){
        $this->faceSorteada = $valor;
    }
    
    //Função para sorteio do dado
    public function lançarDado()
    {
        $valorSorteado = rand($this->getLimiteMinimo(), $this->getLimiteMaximo());
        $this->setFaceSorteada($valorSorteado);
        //return $this->getFaceSorteada();
    }

}