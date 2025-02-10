<?php
    require_once "Persona.php";
    class Studente extends Persona {
        private $matricola;

        public function __construct($nome, $cognome, $matricola) {
            $this->matricola = $matricola;
            parent::__construct($nome, $cognome);
        }

        public function getMatricola() {
            return $this->matricola;
        }

        public function setMatricola($matricola) {
            $this->matricola = $matricola;
        }

        public function stampaAutomobile(){
            echo parent::presentati().", il mio numero di matricola è: ".$this->matricola;
        }

    }
?>