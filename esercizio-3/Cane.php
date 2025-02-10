<?php
    require_once "Animale.php";
    class Cane extends Animale {
        public function __construct() {
            parent::__construct("bau");
        }

        #[Override]
        public function verso(){
            return "Il cane fa bau";
        }

    }
?>