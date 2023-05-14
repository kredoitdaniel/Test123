<?php
    class Fruit {
        # properties
        private $name;
        private $color;
        private $price;


        #methods
        public function __construct($new_name, $new_color, $new_price)
        {
            $this->name = $new_name;
            $this->color = $new_color;
            $this->price = $new_price;
        }



        // setters
        // public function setName($new_name)
        // {
        //     $this->name = $new_name;
        // }

        // public function setColor($new_color)
        // {
        //     $this->color = $new_color;
        // }

        // public function setPrice($new_price)
        // {
        //     $this->price = $new_price;
        // }


        // getters
        public function getName()
        {
            return $this->name;
        }

        public function getColor()
        {
           return $this->color;
        }

        public function getPrice()
        {
            return $this->price;
        }
    }
?>