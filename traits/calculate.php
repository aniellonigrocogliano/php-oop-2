<?php
    trait Calculate {
        private float $calculateiva;
            


        /**
         * Get the value of calculateiva
         */ 
        public function getCalculateiva()
        {
                return $this->calculateiva;
        }

        /**
         * Set the value of calculateiva
         *
         * @return  self
         */ 
        public function setCalculateiva($calculateiva)
        {
                $this->calculateiva = $calculateiva;

                return $this;
        }

        public function getCalculateivaTotal(){
          return $this->calculateiva *0.21;
        }
      }
?>