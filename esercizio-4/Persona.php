<?php
    class Persona {
        private $nome;
        private $cognome;

        public function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
        
        public function getNome() {
            return $this->nome;
        }

        public function getCognome() {
            return $this->cognome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }

        public function presentati() {
            echo "Ciao, sono ".$this->nome." ".$this->cognome;
        }

    }
?>