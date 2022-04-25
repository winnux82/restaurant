<?php
require_once('product.php');

class OrderItem
{
    private string $_id;

    private string $_order_id;

    private string $_product_id;

    private string $_label;

    private float $_price;

    private float $_quantity;


    public function __construct(string $order_id, Product $product, int $quantity)
    {
        $this->_id = uniqid('order_item_');
        $this->_order_id = $order_id;
        $this->_product_id = $product->get_id();
        $this->_label = $product->get_label();
        $this->_price = $product->get_price();
        $this->_quantity = $quantity;
    }

    public function getTotal(): float
    {
        return $this->_quantity * $this->_price;
    }

    /**
     * Get the value of _id
     */ 
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _order_id
     */ 
    public function get_order_id()
    {
        return $this->_order_id;
    }

    /**
     * Get the value of _product_id
     */ 
    public function get_product_id()
    {
        return $this->_product_id;
    }

    /**
     * Get the value of _label
     */ 
    public function get_label()
    {
        return $this->_label;
    }
}
