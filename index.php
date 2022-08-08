<?php

class Animal
{
    private string $name; 
    
    public function setName($value): void
    {
        $this ->name = $value;    
    }
    
    public function getName(): string
    {
        return $this ->name ;
    }
}

$cat = new Animal();
$cat ->setName("Cat");

print $cat -> getName();