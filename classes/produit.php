<?php

class Produit {
    private $nom;
    private $description;
    private $pa;
    private $pv;
    private $taxe;

/**
     * Constructeur
     * 
     * @param string $nom
     * @param string $description
     * @param int $pa
     * @param float $pv
     * @param int $taxe
     */

    public function __construct(string $nom, string $description, float $pa, float $margeVoulue, float $taxe) {
        $this->nom = $nom;
        $this->description = $description;
        $this->pa = $pa;
        $this->pv = $pa*$margeVoulue;
        $this->taxe = $taxe;
    }

    public function getName(){
        return $this->nom;
    }

    public function __toString(){
        return "<br><h1>".$this->nom."</h1>
        <br>".$this->description.
        "<div><p>Son prix d'achat est de ".$this->pa.
        "<br>La marge brut du produit est de ".$this->getPrixMarge().
        "<br>Son prix de vente est de ".$this->pv.
        "<br>La taxe est de ".$this->getPrixTaxe().
        "<br>Le prix de vente TTC est de ".$this->getPrixTTC()."</p></div>";
    }

    public function getPrixMarge():float {

        return $this->pv-$this->pa;
    }

    public function getPrixTaxe():float {
        return $this->pv * ($this->taxe/100);
    }

    public function getPrixTTC():float {
        $taxe = $this->getPrixTaxe();
        return $this->pv + $taxe;
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
    public function setNom(string $nom) {
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get the value of description
     */ 
    public function getDescription() {
        return $this->description;
    }
    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description) {
        $this->description = $description;
        return $this;
    }
    /**
     * Get the value of pa
     */ 
    public function getPa() {
        return $this->pa;
    }
    /**
     * Set the value of pa
     *
     * @return  self
     */ 
    public function setPa(int $pa) {
        $this->pa = $pa;
        return $this;
    }
    /**
     * Get the value of pv
     */ 
    public function getPv() {
        return $this->pv;
    }
    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv(int $pv) {
        $this->pv = $pv;
        return $this;
    }
    /**
     * Get the value of taxe
     */ 
    public function getTaxe() {
        return $this->taxe;
    }
    /**
     * Set the value of taxe
     *
     * @return  self
     */ 
    public function setTaxe(int $taxe) {
        $this->taxe = $taxe;
        return $this;
    }

}