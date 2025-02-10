<?php
    require_once "Veicolo.php";
    class Automobile extends Veicolo {
        private $modello;

        public function __construct($modello, $marca, $anno) {
            $this->modello = $modello;
            parent::__construct($marca, $anno);
        }

        public function getModello() {
            return $this->modello;
        }

        public function setModello($modello) {
            $this->modello = $modello;
        }

        public function stampaAutomobile(){
            parent::stampaVeicolo();
            echo "<p>Modello: ". $this->modello ."</p>";
        }

    }
?>