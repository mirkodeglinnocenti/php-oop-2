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
        $this->setTitolo($titolo);
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->tipologia = $tipologia;
    }

    public function setTitolo($titolo){
        if (is_numeric($titolo)){
            throw new Exception("Il titolo del prodotto non può essere un numero");
            return;
        }
        $this->titolo = $titolo;
    }

    public function getTitolo(){
        return $this->titolo;
    }
}


?>