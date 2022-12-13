<?php
require_once 'Prodotti.php';

class Categoria extends Prodotti
{
    public $animale;
    public function __construct($name, $img, $prezzo, $tipo, Categoria $animale)
    {
        parent::__construct($name, $img, $prezzo, $tipo);
        $this->animale = $animale;
    }

    public function getProdotto()
    {
        $Categoria_name = $this->name;
        $Categoria_img = $this->img;
        $Categoria_prezzo = $this->prezzo;
        $Categoria_tipo = $this->tipo;
        $Categoria_animale = $this->animale;

        return "nome: $Categoria_name | img: $Categoria_img | prezzo: $Categoria_prezzo | tipo: $Categoria_tipo | animale";
    }
}