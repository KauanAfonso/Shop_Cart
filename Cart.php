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

        public function add_product($product_name, $quantity = 1){
            foreach ($this->products as $product) {
        
                if($product["name"] == $product_name){
                    $product["quantity"] = $quantity;
                    $this->cart_list[] = $product;
                    return "Product has benn added";
                }
            }
            
             return "Produto não encontrado !";
            
        }


        public function get_cart(){
            return $this->cart_list;
        }



}



