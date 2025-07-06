<?php 
namespace Core;

abstract class AbstractEntity {
    abstract public static function toObject($array):static ;

    abstract public function toArray():array;
    
    public function toJson():string{
        return json_encode($this->toArray()) ;
    }
}