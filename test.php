<?php

header("charset=utf-8");

echo '<p>'."Example of concatenating strings:".'</p>';
$hello = 'Hello';
$world = 'World';
echo "<h1 style = 'text-align: center'>".$hello." ".$world."</h1>";

echo '<p>'."Example of operations with variable:".'</p>';
$a = 2;
$b = 2;
$c = '4';
$d = '100$';

echo '<p>'.($a+$b).'</p>';
echo '<p>'.($a+$c).'</p>';
echo '<p>'.($b*$c).'</p>';
echo '<p>'.($a*$d).'</p>';
echo '<p>'.((boolean)$d).'</p>';


echo '<p>'."Example of dereferencing variable:".'</p>';
$hidden = 'Hidden text and dereferencing variable';
$c = 'hidden';
$d = 'c';
echo "<h2 style = 'text-align: center'>".$$$d."</h2>";




function check($a, $b){
	echo '<p>'.'checking '.$a.' and '.$b.'</p>';
	if($a === $b) {
		echo "<h2 style = 'text-align: center'>".$a.'==='.$b."</h2>";
	} elseif($a == $b){
		echo "<h2 style = 'text-align: center'>".$a.'=='.$b."</h2>";
	} else {
		echo "<h2 style = 'text-align: center'>".$a.'!='.$b."</h2>";
	}
}

check(1, 1);
check(1, '1');
check('a', 'b');
check('a', 'a');

$countries = "Ukraine, USA, Italy, Spain, Germany";
echo '<p>'."outputting string:".$countries.'</p>';
$arr_of_countries = explode(", ", $countries);
echo '<p>'."Using explode on string to convert it into array and output with foreach:".'</p>';
foreach ($arr_of_countries as $country){
    echo "<h2 style = 'text-align: center'>".$country.	"</h2>";
}

echo '<p>'."Using implode on array to convert it into string".'</p>';
$separated_array = implode(" ", $arr_of_countries);
echo "<h2 style = 'text-align: center'>".$separated_array.	"</h2>";


$hash = [
    "name" => "Zhenya",
	1 => "Something",
    "age" => 19,
    "country" => "Ukraine"
];
echo "<h2 style = 'text-align: center'>Printing hash array: ";
var_dump($hash);
echo "</h2>";

echo "<h2 style = 'text-align: center'>OOP</h2>";

class Person {
    private $name;
    private $surname;
	private $country;
	
    function __construct($name, $surname, $country) {
		$this->name = $name;
		$this->surname = $surname;
        $this->country = $country;
    }

    public function Show() {
        echo "<h4>Name: $this->name</h4><h4>surname: $this->surname</h4><h4>country: $this->country</h4>";
    }

}

class Member extends Person {
    private $id;
    private $username;

    function __construct($id, $username, $name, $surname, $country) {
        parent::__construct($name, $surname, $country);
        $this->id = $id;
        $this->username = $username;
    }

    function Show() {
		parent::Show();
        echo "<h4>id: $this->id</h4><h4>username: $this->username</h4>";
        
    }

}
$mem = new Member(1, 'username', 'name', 'surname', 'Ukraine');
$mem->Show();


class Singleton {
    private static $instance;
    private $num;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance(){
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
	function set_num($num) {
        $this->var = $num;
    }
    function get_num() {
        return $this->num;
    }
    
}

$var = Singleton::getInstance();
$var->set_num(10);

$var2 = Singleton::getInstance();
$var2->set_num(300);
echo "<p>";
print_r($var);
echo "</p><p>";
print_r($var2);
echo "</p>";
?>