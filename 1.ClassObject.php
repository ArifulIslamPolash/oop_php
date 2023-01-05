<?php
class Student{

    private $personal;
    protected $personalWithFamily;
    public $all;
    
    public function __construct(){
        echo "Start! I am from constructor".'<br>'.PHP_EOL;//return from first
    }
    public function custom(){
        return "I am from Custom".'<br>'.PHP_EOL; 
    }
    // echo nl2br();
    public function catalog(){
        echo "I am from catalog".'<br>'.PHP_EOL;
    }
    public function __destruct(){
        echo "Finish! I am from destructor".'<br>'.PHP_EOL;//last execute this function
    }


    
}

$obj=new Student();
echo $obj->custom();
$obj->catalog();


?>