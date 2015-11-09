<?php

require 'class/operatorInterface.php';

require 'class/Calculator.php';
require 'class/Adder.php';

$calcObj = new Calculator;

$calcObj->setOperation(new Adder);

$calcObj->calculate(1,2,3,4,5);

echo $calcObj->getResult();