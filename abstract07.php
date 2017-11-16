<?php
/*

*/
abstract class ACanEat{
	abstract public function eat($food);

	public function breath(){
		echo "Breathh use the air.\n";
	}
}

class Human extends ACanEat{
	//继承抽象类的子类需要实现抽象类中定义的抽象方法
	public function eat($food){
		echo "Human eating $food.\n";
	}
}

class Animal extends ACanEat{
	public function eat($food){
		echo "Animal eating $food.\n";
	}
}

$man = new Human();
$man->eat('Apple');
$man->breath();

$monkey = new Animal();
$monkey->eat('Banana');
$monkey->breath();