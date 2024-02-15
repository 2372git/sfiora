<?php


//Пусть имя созданного студента будет неизменяемым и доступным только для чтения, 
//а вот для курса мы сделаем метод, который будет переводить нашего студента на следующий курс:

class Student
{
	private $name;
	private $course = 1;
	
	public function __construct($name)	{
		$this->name = $name;
//		$this->course = 1;
	}
	
	public function getName()	{
		return $this->name;
	}
	
	public function getCourse()	{
		return $this->course;
	}

	public function nextCourse()	{
		if ($this->isCourseCorrect($this->getCourse())) $this->course ++;
	}
	

        private function isCourseCorrect($a){
                if ($this->course <5){return true;}
                else {return false;}
        }
                
	
}