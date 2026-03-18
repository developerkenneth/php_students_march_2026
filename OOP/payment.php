<?php

require_once "class/Purchase.php";


$paynow = new Purchase ;

echo $paynow->transfer();