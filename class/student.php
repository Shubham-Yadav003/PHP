<?php
class Student{
    private $name;
    private $reg;
    private $age;

    public function __construct($name,$reg,$age){
        $this->name=$name;
        $this->reg=$reg;
        $this->age=$age;

    }
    function __destruct(){
        echo "name is: {$this->name}<br>" ;
    }
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_reg($reg){
        $this->reg=$reg;
    }
    function get_reg(){
        return $this->reg;
    }
      
    function set_age($age){
        $this->age=$age;
    }
    function get_age(){
        return $this->age;
    }
    function display(){
        echo "Name: " . $this->name;
echo "<br>";
echo "Registration No: " . $this->reg;
echo "<br>";
echo "Age: " . $this->age;

    }
}

$abc= new Student('ZZZ',12211,21);
// $aaa= new Student('AAA',12211,21);
// $bbb= new Student('BBB',12211,21);
// $ccc= new Student('CCC',12211,21);
// $ddd= new Student('DDD',12211,21);
// $abc->set_name('Shubham');
// $abc->set_reg(12211284);
// $abc->set_age(21);
// echo "Name: " . $abc->get_name();
// echo "<br>";
// echo "Registration No: " . $abc->get_reg();
// echo "<br>";
// echo "Age: " . $abc->get_age();

$abc->display();

// echo"<br>";
// $aaa->display();
// echo"<br>";
// $bbb->display();
// echo"<br>";
// $ccc->display();
// echo"<br>";
// $ddd->display();
?>


