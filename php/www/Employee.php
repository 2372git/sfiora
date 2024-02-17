<?php

Class Employee {

	private $name;
	private $surname;
	private $age;
	private $salary;
	
	public function __construct($name, $surname, $age, $salary)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->age = $age;
		$this->salary = $salary;
	}

	
	public function getName(){
		return $this->name;
	}
//	public function setName($n){
//		$this->name = $n;
//	}

	public function getSurName(){
		return $this->surname;
	}

        
        public function getAge(){
		return $this->age;
	}
	public function setAge($a){
		if ($this->checkAge($a)) {
		$this->age = $a;
		}
	}

	public function getSalary(){
		return $this->salary . "$";
	}
	public function setSalary($a){
		$this->salary  = $a;
	}

	public function doubleSalary(){
		$this->salary *= 2;
	}

	public function subAge($a){
		return $this->age -= $a;
	}
	private function checkAge($a){
		return ($a > 18 && $a < 60);
	}


}  
