<?php

class CompteEpargne extends Compte {

    private $interet;

     /**
     * Constructeur
     * 
     * @param float $int
     */
    public function __construct(float $solde, float $int, string $nom, string $prenom) {
        $this -> interet = $int;
        parent::__construct($solde, $nom, $prenom);
    }

    public function __toString() {
        return '<br>'.$this->nom.' '.$this->prenom.
        '<br>Votre solde est de '.$this->solde.
        "<br>Votre taux d'intérêt est de ".$this->interet.'%<br>';
    }

    public function Retrait(float $montant) {
        if ($this -> solde <0 ) {
            echo "<br>Votre solde n'est pas suffisant, votre retrait de ".$montant." est refusé<br>";
        } else {
            $this -> solde = $this->solde-$montant;
            echo "<br>Vos billets arrivent<br>";
        }
        return $this; 
    }

    /**
     * Get the value of interet
     */ 
    public function getInteret() {
        return $this->interet;
    }

    /**
     * Set the value of interet
     *
     * @return  self
     */ 
    public function setInteret($interet) {
        $this->interet = $interet;
        return $this;
    }
}



?>