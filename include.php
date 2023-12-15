
<?php
trait Greeting {
    public function sayHello() {
        echo 'Assalomu alaykum, '."<br>";
    }
}

trait Responding {
    public function sayRespond() {
        echo 'Va alykum assalam, '."<br>";
    }
}


trait Welcoming{
    public function welcome() {
        echo 'Welcome to our country!!! '."<br>";
    }
}

trait Bye{
    public function bye() {
        echo 'Nice to meet you too '."<br>"."<br>"."<br>";
    }
}

interface AgeLive {
    
    public function Live($live);
    public function calculateAge($age1);

}


abstract class AllAbout   {
    protected $name;
    public function myName($Name){
        return $this->name=$Name;
    }

    abstract public function myHobbi($hobbi, $hobbi3);
    abstract public function Live($live);
    abstract public function calculateAge($age1);

}


class Student extends AllAbout implements AgeLive {

    use Greeting;
    use Welcoming;
    use Responding;
    use Bye;

    public $age;
    public function calculateAge($age1){
        return 2023-$this->age=$age1;

    }

    public $country;
    public function Live($live){
        return "I live in ".$this->country=$live;
    }
   

    public $hobbi1;
    public $hobbi2;
    public function myHobbi($hobbi,$hobbi3){
        return "My hobbies are ".$this->hobbi1=$hobbi." and ".$this->hobbi2=$hobbi3;

    }

    public function greatingEnd(){
        echo "Nice to meet you"."<br>"."<br>"."<br>";
    }
}

?>