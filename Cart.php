<?php

class Cart{

        public $cart_list;
        private $products;
        private $value_total;

        public function __construct($name, $products) {
            $this->name = $name;
            $this->value_total = 0;
            $this->cart_list = array();
            $this->products = $products;

        } 

        public function show_products(){
            return $this->products;
        }

}



