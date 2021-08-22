<?php
class Student {
    public $name;
    public $major;
    public $gpa;

    function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
  }
}


function getName() {
    return $this->name;
}

function getMajor() {
    return $this->major;
}

function getGpa() {
    return $this->gpa;
}


// function hasHonors() {
//     if($this->gpa >= 3.5) {
//         return "true";
//     }
//     return "false"; 
// }


$student1 = new Student("Jim","Bussiness",2.8);
$student2 = new Student("Pam","Art",3.6);
$student1->name = "Jim 2";
// echo $student1->name;
echo $student1->getName();
echo $student1->getMajo();
echo $student1->getGpa();

// echo $student1->hasHonors();



?>