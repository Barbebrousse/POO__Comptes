<?php

class CompteCourant extends Compte {

    private $decouvert;

     /**
     * Constructeur
     * 
     * @param float $dec
     */
    public function __construct(float $solde, float $dec, string $nom, string $prenom) {
        $this -> decouvert = $dec;
        parent::__construct($solde, $nom, $prenom);
    }

    public function __toString() {
        return  '<br>'.$this->nom.' '.$this->prenom.
        '<br>Votre solde est de '.$this->solde.
        '<br>Votre autorisation de découvert est de '.$this->decouvert.'<br>';
    }

    /**
     * Retrait d'argent dans la limite du découvert autorisé
     * 
     * @param float $montant du retrait
     * @return self
     */
    public function Retrait(float $montant) {
        $solde = ($this -> solde+$this->decouvert-$montant);

        if ($solde <0 ) {
            echo "<br>Votre solde n'est pas suffisant, votre retrait de ".$montant." est refusé<br>";
        } else {
            $this -> solde = $this->solde-$montant;
            echo "<br>Vos billets arrivent<br>";
        }
        return $this; 
    }

    /**
     * Get the value of decouvert
     */
    public function getDecouvert() {
        return $this->decouvert;
    }
    /**
     * Set the value of decouvert
     *
     * @return  self
     */ 
    public function setDecouvert(float $decouvert) {
        $this->decouvert = $decouvert;
        return $this;
    }

}



?>