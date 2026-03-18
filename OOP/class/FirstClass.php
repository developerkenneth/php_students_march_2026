<?php

class FirstClass {
        // properties 
        public $name = "kenneth";
        protected $age = 35;
        private $account_balance = 0.00 ;
      
        // methods 
        public function get_name(){
            return $this->name;
        }

        public function get_balance (){
            return $this->account_balance;
        }
}



