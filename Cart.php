<?php

class Cart{

        //Objetos iniciais
        public $cart_list;
        private $products;
        private $value_total;

        public function __construct($name, $products) {
            $this->name = $name;
            $this->value_total = 0;
            $this->cart_list = array();
            $this->products = $products;

        } 

        //mostrando os produtos disponiveis
        public function show_products(){
            return $this->products;
        }

        //Metodo para adicionar produto no carrinho
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

        //Getter de carrinho
        public function get_cart(){
            return $this->cart_list;
        }

        //Função encpasualada para dar o update no valor total
        private function update_value_total(){
            foreach ($this->cart_list as $product) {
                $this->value_total += ($product["quantity"] * $product["price"]);
            }
        }

        //getter para obter o valor total
        public function get_total(){
            return $this->value_total;
        }

        //Função para aterar a quantidade    
        public function alter_quantity($quantity, $product_name){
            foreach ($this->cart_list as &$product) {
           
                if($product["name"] == $product_name){
                    $product["quantity"] = $quantity;
                    echo "Produto encontrado";
                    $this->update_value_total();
                }
                return;
            }

        
        }

}



