<?php 

class Customer {
    public $id;
    public $name;
    public $email;
    public $balance;

    public function __construct($id, $name, $email, $balance) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

    public function getEmail() {
        return $this->email;
    }

}

$customer = new Customer(1, 'Dave M', 'dave@gmail.com', 0);

echo $customer->getEmail();

?>