<?php

require_once "Cart.php";


//Criando os produtos
$products_list = array(
    array("name" => "Camiseta", "description" => "Camiseta de algodão, confortável e estilosa.", "price" => 49.90),
    array("name" => "Calça Jeans", "description" => "Calça jeans modelo skinny, disponível em diversas cores.", "price" => 89.90),
    array("name" => "Tênis Esportivo", "description" => "Tênis de corrida, leve e com alta performance.", "price" => 199.90),
    array("name" => "Jaqueta de Couro", "description" => "Jaqueta de couro, ideal para noites frias e estilosas.", "price" => 299.90),
    array("name" => "Relógio de Pulso", "description" => "Relógio moderno com pulseira de couro, resistente à água.", "price" => 159.90),
    array("name" => "Mochila", "description" => "Mochila resistente e espaçosa para o dia a dia.", "price" => 129.90),
    array("name" => "Óculos de Sol", "description" => "Óculos de sol com proteção UV e design moderno.", "price" => 89.90),
    array("name" => "Bermuda de Praia", "description" => "Bermuda de praia leve e confortável para o verão.", "price" => 39.90),
    array("name" => "Jaqueta de Inverno", "description" => "Jaqueta de inverno quentinha e confortável.", "price" => 349.90),
    array("name" => "Cinto de Couro", "description" => "Cinto de couro resistente, ideal para o dia a dia.", "price" => 69.90)
);


//Utilizando a Classe Cart
$cart = new Cart('Kauan', $products_list);
print_r($cart->show_products());
$cart->add_product("Camiseta",2);
$cart->add_product("Cinto de Couro",1);
$cart->alter_quantity(5, "Camiseta");
$cart->add_product("Mochila", 2);
print_r($cart->get_cart());
$cart->delete_produtc('Camiseta');
echo("O total do carrinho é de: " . $cart->get_total());