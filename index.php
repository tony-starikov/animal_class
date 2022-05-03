<?php
class Animal {
	public $food;
	public $location;

	public function __construct($food, $location)
	{
		$this->food = $food;
		$this->location = $location;
	}

	public function makeNoise()
	{
		echo 'Make noise!';
	}

	public function eat()
	{
		echo 'This animal is eating.';
	}

	public function sleep()
	{
		echo 'This animal is sleeping.';
	}
}

class Dog extends Animal {
	public $dogName;

	public function __construct($food, $location, $name)
	{
		parent::__construct($food, $location);
		$this->dogName = $name;
	}

	public function makeNoise()
	{
		echo $this->dogName . ' making noise!';
	}

	public function eat()
	{
		echo $this->dogName . ' is eating.';
	}
}

class Cat extends Animal {
	public $catName;

	public function __construct($food, $location, $name)
	{
		parent::__construct($food, $location);
		$this->catName = $name;
	}

	public function makeNoise()
	{
		echo $this->catName . ' making noise!';
	}

	public function eat()
	{
		echo $this->catName . ' is eating.';
	}

}

class Horse extends Animal {
	public $horseName;

	public function __construct($food, $location, $name)
	{
		parent::__construct($food, $location);
		$this->horseName = $name;
	}

	public function makeNoise()
	{
		echo $this->horseName . ' making noise!';
	}

	public function eat()
	{
		echo $this->horseName . ' is eating.';
	}

}

class Veterinarian {
	public function treatAnimal(Animal $animal):void
	{
		var_dump( ' Animal food is: ' . $animal->food);
		var_dump( ' Animal location is: ' . $animal->location);
	}
}

$veterinarian = new Veterinarian();

$dog = new Dog('meat', 'home', 'John');
$cat = new Cat('fish', 'street', 'Sweety');
$horse = new Horse('grass', 'stall', 'Idalgo');

$animals = [
	$dog,
	$cat,
	$horse
];

foreach ($animals as $animal) {
	$veterinarian->treatAnimal($animal);
}