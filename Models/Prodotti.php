<?php
class Prodotti
{
    protected $id;
    public $tipo;
    public $name;
    public $img;
    public $prezzo;

    public function __construct($name, $img, $prezzo, $tipo)
    {
        $this->name = $name;
        $this->img = $img;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
    }
}