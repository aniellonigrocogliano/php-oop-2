<?php
require_once __DIR__ . "/categoria.php";


    class Tipologia extends Categoria {
        
        private string $tipologia;

        public function __construct(string $nome, string $descrizione, string $image, float $prezzo, string $categoria, string $tipologia) {

            parent::__construct($nome, $descrizione, $image, $prezzo, $categoria);
            $this->tipologia = $tipologia;
        }


        /**
         * Get the value of tipologia
         */ 
        public function getTipologia()
        {
                return $this->tipologia;
        }

        /**
         * Set the value of tipologia
         *
         * @return  self
         */ 
        public function setTipologia($tipologia)
        {
                $this->tipologia = $tipologia;

                return $this;
        }
    }