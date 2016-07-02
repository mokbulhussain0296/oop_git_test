<?php

class BankAccount implements IfaceBankAccount

{

    private $balance = null;

    public function __construct(Money $openingBalance)

    {

        $this->balance = $openingBalance;

    }

    public function balance()

    {

        return $this->balance;

    }

    public function deposit(Money $amount)

    {
        
        //implement this method

        $this->balance =(string)$this->balance + (string)$amount;

    }

    public function transfer(Money $amount, BankAccount $account)

    {

        //implement this method

        if((string)$amount >(string)$this->balance)

        {

            throw new Exception("Withdrawl amount larger than balance");

        }
       
        $account->balance =(string)$account->balance +(string)$amount;

        $this->balance =(string)$this->balance -(string)$amount;

    }


    public function withdraw(Money $amount)

    {
        //implement this method

        if((string)$amount >(string)$this->balance)

        {

            throw new Exception("Withdrawl amount larger than balance");

        }

        $this->balance = (string)$this->balance -(string)$amount;

    }
}