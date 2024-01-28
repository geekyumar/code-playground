<?php

class superman{
    public function __call($method, $args){
        $class_list = get_class_methods('superman');

        foreach ($class_list as $m){
            if($m == '__call'){
                continue;
            }
            if($m == $method){
                echo "Calling the private method from __call: $m\n";
                $this->$m();
            } 
        }

        $dir = __DIR__;
        $dir_files = scandir($dir);

        foreach ($dir_files as $m){
            if($m == '.' or $m == '..'){
                continue;
            }
            $func_name = basename($m, '.php');
            if($func_name == $method){
                include $dir.'/'.$m;
                $func = Closure::bind(${$func_name}, $this, 'superman');
                if(is_callable($func)){
                   return call_user_func_array($func, $args);
                }
            }
        }
    }

    public static function getClassMethods(){
        print_r(get_class_methods('superman'));
    }

    private function get_powers(){
        echo "I CAN FLY!\n";
    }
}

$obj = new superman();
$obj->closure_func();
superman::getClassMethods();