<?php

class Prodotti{
    public $titolo;
    public $descrizione;
    public $codice;
    public $prezzo;
    public $quantità;
    public $tipologia;

    public __construct ($titolo, $codice, $prezzo, $quantità, $tipologia){
        $this->titolo = $titolo;
        $this->codice = $codice;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->tipologia = $tipologia;
    }
}


?>