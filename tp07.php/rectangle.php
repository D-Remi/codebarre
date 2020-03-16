<?php

    class Rectangle {
        public $longueur;
        public $hauteur;

        public function __construct($l, $h) {
            $this->longueur = $l;
            $this->hauteur = $h;
        }

        public function  getLongueur(){
            return $this ->longueur;
        }

        public function setLongueur(){
            $this->longueur = $l;
        }

        public function calculAire() {
            return ($this->longueur * $this->hauteur);
        }
    }