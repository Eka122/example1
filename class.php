<?php

/**
 *
 */
class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName(string $nm)
    {
        $this->name = $nm;
    }

    public function setAge(int $yrs)
    {
        $this->age = $yrs;
    }

    public function SetSalary(int $sal)
    {
        $this->salary = $sal;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$van = new Worker();
$van->setName('Иван');
$van->setAge(25);
$van->setSalary(1000);

$vas = new Worker();
$vas->setName('Вася');
$vas->setAge(26);
$vas->setSalary(2000);

//public function setName (string $nm){
//$this->name=$nm;
//}

//public function setAge (int$yrs){
//	$this->age=$yrs;
//}

//public function SetSalary(int $sal){
//	$this->salary=$sal;
//}

//public function getName(){return $this->name;}

//public function getAge(){return $this->age;}

//public function getSalary(){return $this->salary;}

//$van= new Worker();

//$van->setName('Иван');
//$van->setAge(25);
//$van->setSalary(1000);

//$vas= new Worker();

$vas->setName('Вася');
//$vas->setAge(26);
//$vas->setSalary(2000);

echo 'Имя:\t' . $van->getName() . "<br >";
echo 'Возраст:\t' . $van->getAge() . "<br >";
echo 'Зарплата:\t' . $van->getSalary() . "<br >";