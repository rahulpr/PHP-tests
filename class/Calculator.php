<?php

	/**
	* Calculator
	* @author Rahul P R
	* @date 09/11/2015
	*/

class Calculator {

	private $operation ;

	private $result;

	// instance passed must implement operatorInterface
	public function setOperation(operatorInterface $operation) {

		$this->operation = $operation;
	}	

	public function calculate() {

		$args = func_get_args();

		foreach($args as $number) {

			$this->result = $this->operation->run($this->result, $number);
		}

	}

	public function getResult() {

		return $this->result;
	}




}