<?php

require_once('product.php');
require_once('customer.php');
require_once('order.php');
require_once('orderitem.php');



//Create products
$product1 = new Product('pizza', 8.10);
$product2 = new Product('lasagne', 7.80);
$product3 = new Product('menu enfant', 5.20);
//add products to array
$product = [];
$product[] = $product1;
$product[] = $product2;
$product[] = $product3;



//Create new customer
$customer1 = new Customer('Maurice','Robert');


//create order
$customer_id1 = $customer1->get_id();
$order1 = new Order($customer_id1);
    //customer order food, we create orderitems
    $order_id1= $order1->get_id();
    $order_item1= new OrderItem($order_id1, $product1, 2);
    $order_item2= new OrderItem($order_id1, $product2, 3);
//add OrderItem in Order.
$order1->addOrderItem($order_item1)
        ->addOrderItem($order_item2);

echo '<pre>';

print_r($order_item2->getTotal());

print_r($order1->getTotalOrder());




