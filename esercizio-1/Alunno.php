<?php
    class Alunno {
        private $nome;
        private $cognome;
        private $eta;

        public function __construct($nome, $cognome, $eta) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCognome() {
            return $this->cognome;
        }

        public function getEta() {
            return $this->eta;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }

        public function setEta($eta) {
            $this->eta = $eta;
        }

        public function stampaAlunno(){
            echo "<p>Nome: ". $this->nome ."</p>";
            echo "<p>Cognome: ". $this->cognome ."</p>";
            echo "<p>Eta: ". $this->eta ."</p>";
        }

    }
?>