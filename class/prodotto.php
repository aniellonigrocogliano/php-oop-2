<?php
    class Prodotto{
        private string $nome;
        private string $descrizione;
        private string $image;
        private int $prezzo;
    

    public function __construct(string $nome, string $descrizione, string $image, int $prezzo) {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->image = $image;
        $this->prezzo = $prezzo;
    }
        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of descrizione
         */ 
        public function getDescrizione()
        {
                return $this->descrizione;
        }

        /**
         * Set the value of descrizione
         *
         * @return  self
         */ 
        public function setDescrizione($descrizione)
        {
                $this->descrizione = $descrizione;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of prezzo
         */ 
        public function getPrezzo()
        {
                return $this->prezzo;
        }

        /**
         * Set the value of prezzo
         *
         * @return  self
         */ 
        public function setPrezzo($prezzo)
        {
                $this->prezzo = $prezzo;

                return $this;
        }
      
    }
?>