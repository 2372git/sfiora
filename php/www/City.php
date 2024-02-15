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
    private $name;
    private $population;
    
        public function __construct($name, $population) {
            $this->name = $name;
            $this->population = $population;
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
}
        

