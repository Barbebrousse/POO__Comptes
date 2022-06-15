<?php

abstract class Compte {

    protected $solde;
    protected $nom;
    protected $prenom;

    /**
     * Constructeur
     * 
     * @param float $sde
     * @param string $name
     * @param string $prenom
     */

    protected function __construct(float $solde, string $nom, string $prenom) {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> solde = $solde;
    }

    public function Solde(){
        return $this -> solde ;
    }

    /**
     * Dépôt d'argent
     */
    public function Depot(float $montant){
       if($montant > 0){
         $this -> solde = $this -> solde+$montant;
         echo "<br>Votre dépot de ".$montant."€ a bien été émis.<br>";
       } else {
        echo "<br>Le montant du dépôt doit être superieur à 0<br>";
       }

       return $this;
    }

        /**
     * Retrait d'argent dans la limite du découvert autorisé
     * 
     * @param float $montant du retrait
     * @return self
     */
    abstract protected function Retrait(float $montant);

    /**
     * Get the value of solde
     */ 
    public function getSolde() {
        return $this->solde;
    }
    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde(float $solde) {
        $this->solde = $solde;
        return $this;
    } 
    
    /**
     * Get the value of nom
     */ 
    public function getNom() {
        return $this->nom;
    }
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(float $nom) {
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get the value of prenom
     */ 
    public function getPrenom() {
        return $this->prenom;
    }
    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(float $prenom) {
        $this->prenom = $prenom;
        return $this;
    }

}


?>