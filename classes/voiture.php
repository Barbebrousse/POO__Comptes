<?php 

//Patron de l'objet voiture avec la classe
class Voiture {
    //Int: vitesse max en km/h
    private $vitesseMax;
    //String: couleur de la voiture 
    private $couleur;
    //Int: accéleration de 0 à 100 exprimé en secondes
    private $acceleration;
    //Booléen: true si démarrer, false si arrêter
    private $estDemarre;
    //Private permet de ne pas pouvoir manipuler la variable en dehors de la classe.

    /**
     * 
     *Constructeur 
     * 
     * @param int $vM vitesse max
     * @param string $c couleur
     * @param int $acc accelération
     */

    public function __construct(int $vM, string $c, int $acc) {
        $this -> estDemarre = false;
        $this -> vitesseMax = $vM;
        $this -> couleur = $c;
        $this -> acceleration = $acc;
    }

    public function __toString() {
        return 'Vitesse max: '.$this->vitesseMax.
        '<br>Couleur: '.$this->couleur.
        '<br>Accélération: '.$this->acceleration;
    }

    public function Demarrer() {
        if($this -> estDemarre === false){
            $this -> estDemarre = true;
            echo 'La voiture démarre.';
        } else {
            echo 'La voiture est déjà démarré.';
        }
    }

    public function Arreter() {
        if($this -> estDemarre === true){
            $this -> estDemarre = false;
            echo "La voiture s'arrête.";
         } else {
            echo "La voiture est déjà arrêté.";
         }
    }
 
    /** Get -> Accesseur (afficher les valeurs)
     * Set -> Mutateur (modifier les valeurs)
     * 
     * Get the value of vitesseMax
     */ 
    public function getVitesseMax() {
        return $this->vitesseMax;
    }
    /**
     * Set the value of vitesseMax
     * @return  self
     */ 
    public function setVitesseMax($vitesseMax) {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }
    /**
     * Get the value of acceleration
     */ 
    public function getAcceleration() {
        return $this->acceleration;
    }
    /**
     * Set the value of acceleration
     * @return  self
     */ 
    public function setAcceleration($acceleration) {
        $this->acceleration = $acceleration;
        return $this;
    }
    /**
     * Get the value of couleur
     */ 
    public function getCouleur() {
        return $this->couleur;
    }
    /**
     * Set the value of couleur
     * @return  self
     */ 
    public function setCouleur($couleur) {
        $this->couleur = $couleur;
        return $this;
    }
}
