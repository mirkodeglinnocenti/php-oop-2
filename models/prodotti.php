<?php

require_once __DIR__ . "/../traits/Tipologia.php";

class Prodotti{

    use Tipologia;

    public $titolo;
    public $descrizione;
    public $codice;
    public $prezzo;
    public $quantità;

    public function __construct ($titolo, $prezzo, $quantità, $tipologia){
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->tipologia = $tipologia;
    }
}


?>