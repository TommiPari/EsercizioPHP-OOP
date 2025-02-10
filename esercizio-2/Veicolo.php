<?php
    class Veicolo {
        protected $marca;
        protected $anno;

        public function __construct($marca, $anno) {
            $this->marca = $marca;
            $this->anno = $anno;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function getAnno() {
            return $this->anno;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function setAnno($anno) {
            $this->anno = $anno;
        }

        public function stampaVeicolo(){
            echo "<p>Marca: ". $this->marca ."</p>";
            echo "<p>Anno: ". $this->anno ."</p>";
        }

    }
?>