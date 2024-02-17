<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

//namespace City;

/**
 * Description of City
 *
 * @author Andronis10
 */
class City {
    public $name;
    public $population;
    public $foundation;
    
        public function __construct($name, $population, $foundation) {
            $this->name = $name;
            $this->population = $population;
            $this->foundation = $foundation;
        }
        public function getName(){
		return $this->name;
	}
        public function setName($name){
		$this->name = $name;
	}
	public function getPopulation(){
		return $this->population;
		}
	public function setPopulation($a){
		$this->population = $a;
		}

        public function getfoundation(){
		return $this->foundation;
		}

        public function setFoundation($a){
		$this->foundation = $a;
		}
}
        


class CityProp {
    public $propName;
    
        public function __construct($prop) {
            $this->propName = $prop;
        }
}