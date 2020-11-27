<?php

class Invoice {

    public function __construct(
        private $description,
        private $total,
        private $date,
        private $paid)
    {
    }
}

// named params:
// description: 'something'

// with named params the order does not matter
// downside if property name is changed this must be changed as well
$invoice = new Invoice(
    description:'customer installation',
    total: 10000,
    paid: true,
    date: new DateTime()
);

var_dump($invoice);