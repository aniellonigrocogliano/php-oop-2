<?php
require_once __DIR__ . "/prodotto.php";

    class Categoria extends Prodotto {
        
        private string $categoria;

        public function __construct(string $nome, string $descrizione, string $image, float $prezzo, string $categoria) {

            parent::__construct($nome, $descrizione, $image, $prezzo);
            $this->categoria = $categoria;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }
    }
?>