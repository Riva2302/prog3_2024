<?php

include("../Model/student.class.php");
$operacion=$_REQUEST["operation"];
$student= new Student(); //creamos el objeto student de tipo Student



if($operacion=="add"){
    $student->setDni($_REQUEST ["dni"]);
    $student->setName($_REQUEST ["name"]);
    $student->setSurname($_REQUEST ["surname"]);
    $student->setBirthday($_REQUEST ["birthday"]);
    $student->setPhone($_REQUEST ["phone"]);
    $student->setAddress($_REQUEST ["address"]);
    $student->setEmail($_REQUEST ["email"]);
    $student->setPassword($_REQUEST ["password"]);
    $student->setSchool($_REQUEST ["school"]);
    $student->addStudent();
}else if($operacion=="update"){
   
    $student->setDni($_REQUEST ["dni"]);
    $student->setName($_REQUEST ["name"]);
    $student->setSurname($_REQUEST ["surname"]);
    $student->setBirthday($_REQUEST ["birthday"]);
    $student->setPhone($_REQUEST ["phone"]);
    $student->setAddress($_REQUEST ["address"]);
    $student->setEmail($_REQUEST ["email"]);
    $student->setPassword($_REQUEST ["password"]);
    $student->setSchool($_REQUEST ["school"]);
    $student->setIdStudent($_REQUEST ["idStudent"]);
    $student->updateStudent();

}else if($operacion=="delete"){

}
?>