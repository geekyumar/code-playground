<?php

class callFunc{
    public function __call($name, $args){
       if($name == 'getData'){
        echo "Calling getter function\n";
       }

       else if($name == 'protectedFunc'){
        $this->$name();
       }
       else{
        return false;
       }
    }

    private function protectedFunc(){
        echo "Protected function is called!\n";
    }
}

$obj = new callFunc();
$obj->protectedFunc();

