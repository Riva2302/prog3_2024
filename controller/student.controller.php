<?php
include ("../model/student.class.php");
$operation=$_REQUEST["operation"];

$student=new Student(); //creamos el objeto student de tipo Student.

if($operation=="add"){
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->addStudent();

}else if($operation=="update"){
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->editStudent();

}else if ($operation=="delete"){
    $student->getDni($_REQUEST["dni"]);
    $student->getName($_REQUEST["name"]);
    $student->getSurname($_REQUEST["surname"]);
    $student->getBirthdate($_REQUEST["birthdate"]);
    $student->getPhone($_REQUEST["phone"]);
    $student->getAddress($_REQUEST["address"]);
    $student->getEmail($_REQUEST["email"]);
    $student->getPassword($_REQUEST["password"]);
    $student->getSchool($_REQUEST["school"]);
    $student-deleteStudent();
}
?>