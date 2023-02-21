<?php

class Employee{
    private $name;
    private $department;
    private $salary;

function __construct($name,$department,$salary){
    $this->name = $name;
    $this->department = $department;
    $this->salary = $salary;
}

function __destruct(){
    echo "เรียกใช้งาน Destrutor<br>";
}

/*public function showData(){
    echo "ชื่อพนักงาน = " . $this->name . "<br>";
    echo "แผนก = " . $this->department . "<br>";
    echo "เงินเดือน = " . $this->salary . "<br>";
    echo "<hr>";
}*/

public function setName($name){
    $this->name = $name;
}

public function setDepartment($nameDepartment){
    $this->department = $nameDepartment;
}

public function setSalary($nameSalary){
    $this->salary = $nameSalary;
}

public function showData(){
    echo "ชื่อ = " . $this->name . "<br>";
    echo "แผนก = " . $this->department . "<br>";
    echo "เงินเดือน = " . $this->salary . "<br>";
    echo "<hr>";
}

}


$emp1 = new Employee("เจน","บัญชี",20000);
$emp1->setSalary(80000);
$emp1->ShowData();

$emp2 = new Employee("ก้อง","ไอที",50000);
$emp2->ShowData();

$emp3 = new Employee("โจ้","ฝ่ายขาย",30000);
$emp3->ShowData();

?>