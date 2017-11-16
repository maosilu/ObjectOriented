<?php
date_default_timezone_set('PRC');

class Human{
	public $name;
	protected $height;
	public $weight;

	private $isHungry = true;

	public function eat($food){
		echo $this->name."'s eating ".$food."\n";
	}
}

class Animal{

}

// PHP是单继承的，extends后面只能有一个类
class NbaPlayer extends Human{
	public $team = 'Bull';
	public $playerNumber = 23;

	private $age = 40;

	/*
	在类的对象共用同一个静态成员的时候，可以使用static定义成员，那么所有的对象的这个属性都是一样的，而不需要再去单独设置
	*/
	public static $president = 'David Stern';

	public static function changepresident($newPrsdt){
		// 在类的定义中使用静态成员的时候，用self关键字后面跟着::操作符即可，⚠️：在访问静态成员属性的时候，::后面需要跟$符号
		self::$president = $newPrsdt;
	}

	// 构造函数，在被实例化的时候自动调用
	function __construct($name, $height, $weight, $team, $playerNumber){
		echo "In NbaPlayer condtructor\n";
		// 父类中的属性，可以通过$this来访问
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;

		$this->team = $team;
		$this->playerNumber = $playerNumber;

	}

	// 析构函数，在程序执行结束的时候会自动调用
	// 析构函数通常被用于清理程序使用的资源。比如，程序使用了打印机，那么可以在析构函数里面释放打印机资源。
	function __destruct(){
		echo "Destroying ".$this->name."\n";
	}

	//定义方法
	public function run(){
		echo 'Running\n';
	}

	public function jump(){
		echo 'Jumping\n';
	}

	public function dribble(){
		echo "Dribbling\n";
	} 

	public function shoot(){
		echo 'Shooting\n';
	}

	public function dunk(){
		echo 'Dunking\n';
	}

	public function pass(){
		echo "Passing\n";
	}

	public function getAge(){
		echo $this->name."'s age is ".$this->age."\n";
	}
}

//类到对象的实例化
// $jordan = new Nbaplayer('Jordan', '198cm', '98kg', 'Bull', 23);

// $james = new Nbaplayer('James', '203cm', '120kg', 'Heat', 6);

// $jordan->changepresident('Adam Silver');
// echo 'Jordan:'.$jordan->president."\n";
// echo 'James:'.$james->president."\n";

// 在类定义外部访问静态成员，可以使用类名加::操作符的方法来访问静态成员
echo NbaPlayer::$president." before change \n";
echo NbaPlayer::changepresident('Adam Sliver');
echo NbaPlayer::$president." after change \n";

