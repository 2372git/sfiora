<?php

class Rectangle {
	public $width;
	public $high;

	public function getPerimeter()
	{
		return 2 * ($this->width + $this->high);
	}

	public function getSquare()
	{
		return $this->width * $this->high;
	}

}


