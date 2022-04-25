<?php

require_once('orderitem.php');


class Order
{
    private string $_id;
    private string $_customer_id;
    private array $_orderItems = [];

    private float $_totalOrder;



    public function __construct(string $customer_id)
    {
        $this->_id = uniqid('order_');
        $this->_customer_id = $customer_id;
    }


    public function addOrderItem(OrderItem $orderItem): self
    {
        $this->_orderItems[] = $orderItem;

        return $this;
    }

    public function getTotalOrder()
    {
        $this -> _orderItems;

        return $this;
    }
    /*public function getTotal(): float
    {
        return $this->_quantity * $this->_price;
    }*/

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _customer_id
     */
    public function get_customer_id()
    {
        return $this->_customer_id;
    }
}
