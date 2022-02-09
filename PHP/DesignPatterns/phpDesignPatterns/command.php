<?php

// Command pattern

// theres a reciever that holds the value of the returned item
// invoker starts the process

interface Command {
    public function execute();
}

class GetCompanyCommand implements Command {
    private $stocksim;

    public function execute()
    {
        $this->stocksim->getCompany();
    }
}


class updatePriceCommand implements Command {
    private $stocksim;

    public function execute()
    {
        $this->stocksim->updatePrice();
    }
}



// Reciever
class Stocksim {
    public function getCompany(){

    }

    public function updatePrice(){

    }
}



// Client

// Input/action is a string
// $in = getAction();
$in = "update";


// Invoker

// check the input
if($in == "update"){
    $comm = new updatePriceCommand();
}