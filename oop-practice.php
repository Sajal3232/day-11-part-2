<?php
class Demo{
    public $name="hi";

    function add(){
        echo "hello";
    }
}



$obj_demo=new Demo();
echo $obj_demo->add();
echo $obj_demo->name;


?>