<?php

class Person{
    private $name;
    private $email;

    function setName($name){
        $this->name = $name;
    }
    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }

    function getName(){
        return $this->name;
    }

}

$personOne = new Person();

$personOne->setName("sajib");

echo $personOne->getName()."\n";
PHP_EOL;

$personOne->setEmail("sajibuleng@gmail.com");

echo $personOne->getEmail();