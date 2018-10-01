<?php

class cd{

    public $titulo;
    public $anio;
    public $interprete;
    public $id;

   /* public function __construct($titulo, $anio, $interprete, $id)
    {
        $this->titulo=$titulo;
        $this->anio=$anio;
        $this->interprete=$interprete;
        $this->id=$id;
    }*/

    public function ToString()
    {
        return $this->titulo."-".$this->interprete."-".$this->anio."-".$this->id;
    }
}

?>