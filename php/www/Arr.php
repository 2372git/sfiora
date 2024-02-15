<?php

//Реализуйте класс Arr, похожий на тот, который я реализовал выше. 
//В отличие от моего класса метод add вашего класса параметром должен 
//принимать массив чисел. Все числа из этого массива должны добавляться 
//в конец массива $this->numbers.



	class Arr
	{
		private $numbers = []; 
		
		public function addArray($nums)
		{
			$this->numbers = array_merge($this->numbers, $nums);
		}
		
		public function addOne($num)
		{
			$this->numbers[] = $num;
		}

                public function getSum()
		{
			return array_sum($this->numbers);
		}
		
		
		public function getAvg()
		{
			if (sizeof($this->numbers) == 0){return 0;}
			return $this->getSum()/sizeof($this->numbers);
		}
		
		
		
	}

