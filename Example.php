<?php 
require_once './Hello.php';
class Example extends Hello{
    public $name="sajal";
    protected $city="dhaka";
    private $country="bangladesh";
    private $value;

    
  public function __construct($data)
  {
      $this->value=$data;
  }

 
    public function addition(){
        
        echo $this->value;
    }
    protected function subtraction(){
        echo "sub";
    }

    private function reminder(){
        echo "rem";
    }



    function makeFullName(){
        $firstname=$_POST["first_name"];
        $lastname=$_POST["last_name"];
        $fullname=$firstname." ".$lastname;
        return $fullname;
    }

    function sumSeriesNumber($first,$last){
          $res="";
        for($i = $first; $i <= $last; $i++){
            $res += $i;
        }
        return $res;
    }
}


?>