<?php 
class Example{
    


    public $name="sajal";
    public $city="dhaka";
    public $country="bangladesh";
    function addition($x,$y){
        $z=$x+$y;
        echo $z;
    }


    function makeFullName(){
        $firstname=$_POST["first_name"];
        $lastname=$_POST["last_name"];
        $fullname=$firstname." ".$lastname;
        return $fullname;
    }
}


?>