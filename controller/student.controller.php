<?php
include ("model/student.class.php");
$operation=$_REQUEST["operacion"];

$student=new Student(); //creamos el objeto student de tipo Student.



if($operation=="add"){
$student-addStudent();
$student->setDni($_REQUEST["dni"]);
$student->setName($_REQUEST["name"]);
$student->setSurname($_REQUEST["surname"]);
$student->setBirthdate($_REQUEST["birthdate"]);
$student->setPhone($_REQUEST["phone"]);
$student->setAddress($_REQUEST["address"]);
$student->setEmail($_REQUEST["email"]);
$student->setPassword($_REQUEST["password"]);
$student->setSchool($_REQUEST["school"]);
}else if($operation=="update"){

}else if ($operation=="delete"){
    
}
?>