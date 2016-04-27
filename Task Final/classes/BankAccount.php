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
    }

    public function transfer(Money $amount, BankAccount $account)
    {
         	$accounts = $this->balance;
	 
	
	 
	  if($accounts > $amount->value())
	  { 
	  
		$this->balance =  $accounts - (int)$amount->value();
		$account->balance = $account->balance + (int)$amount->value();
		return $account->balance;
		  
	  }
	  else{
	 
	  throw new Exception('Withdrawl amount larger than balance');
	  
	  }
    }
}
