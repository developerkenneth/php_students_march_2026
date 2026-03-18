<?php
require_once "Pay.php";

class Purchase implements Pay {

        
        public function transfer()
        {
            echo "transfer completed successfully";
        }

         public function pos()
        {
            echo "pos transaction completed successfully";
        }

         public function cash()
        {
            echo "cash is accepted as well. thank you";
        }

        
}