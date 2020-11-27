<?php

class Invoice {
    private $description;
    private $total;
    private $date;
    private $paid;

    public function __construct($description, $total, $date, $paid)
    {
        $this->description = $description;
        $this->total = $total;
        $this->date = $date;
        $this->paid = $paid;
    }
}

// named params:
// description: 'something'

// with named params the order does not matter
$invoice = new Invoice(
    description:'customer installation',
    total: 10000,
    paid: true,
    date: new DateTime()
);

var_dump($invoice);