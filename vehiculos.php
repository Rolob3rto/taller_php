<?php

class Vehiculos{

    public $Matricula = null;
    public $Marca = null;
    public $Modelo = null;
    public $Color = null;
    public $Revisado = null;

    function __construct($Matricula, $Marca, $Modelo, $Color, $Revisado)
    {
        $this->Matricula = $Matricula;
        $this->Marca = $Marca;
        $this->Modelo = $Modelo;
        $this->Color = $Color;
        $this->Revisado = $Revisado;
    } 
    public function getMatricula(){
        return $this->Matricula;
    }

    public function getMarca()
    {
        return $this->Marca;
    }

    public function getModelo()
    {
        return $this->Modelo;
    }
    public function getColor()
    {
        return $this->Color;
    }
    public function getRevisado()
    {
        return $this->Revisado;
    }
    
}