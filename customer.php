<?php

class Customer
{

    private string $_id;
    private string $_firstname;
    private string $_lastname;
    private ?string $_email;

    public function __construct(string $firstname, string $lastname, string $email =null )
    {
        $this->_id = uniqid('customer_');
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_email = $email;
    }



    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _firstname
     */
    public function get_firstname()
    {
        return $this->_firstname;
    }

    /**
     * Set the value of _firstname
     *
     * @return  self
     */
    public function set_firstname($_firstname)
    {
        $this->_firstname = $_firstname;

        return $this;
    }

    /**
     * Get the value of _lastname
     */
    public function get_lastname()
    {
        return $this->_lastname;
    }

    /**
     * Set the value of _lastname
     *
     * @return  self
     */
    public function set_lastname($_lastname)
    {
        $this->_lastname = $_lastname;

        return $this;
    }

    /**
     * Get the value of _email
     */
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }
}
