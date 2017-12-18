<?php

class Student {
    private $noCarte;
    private $nom;
    private $prenom;
    private $admission;
    private $filiere;
    
    public function __construct($noCarte, $nom, $prenom, $admission, $filiere) {
        $this->noCarte = $noCarte;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->admission = $admission;
        $this->filiere = $filiere;
    }
    
    function getNoCarte() {
        return $this->noCarte;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdmission() {
        return $this->admission;
    }

    function getFiliere() {
        return $this->filiere;
    }

    function setNoCarte($noCarte) {
        $this->noCarte = $noCarte;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdmission($admission) {
        $this->admission = $admission;
    }

    function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

}
