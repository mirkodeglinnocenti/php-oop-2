<?php

class Prodotti{
    public $titolo;
    public $descrizione;
    public $codice;
    public $prezzo;
    public $quantità;
    public $tipologia;

    public function __construct ($titolo, $prezzo, $quantità, $tipologia){
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->tipologia = $tipologia;
    }
}


?>