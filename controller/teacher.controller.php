<?php

include("../model/teacher.class.php");
$operacion=$_REQUEST["operation"];
$teacher= new Teacher(); //creamos el objeto teacher de tipo Teacher



if($operacion=="add"){
    $teacher->setDni($_REQUEST ["dni"]);
    $teacher->setName($_REQUEST ["name"]);
    $teacher->setSurname($_REQUEST ["surname"]);
    $teacher->setBirthday($_REQUEST ["birthday"]);
    $teacher->setPhone($_REQUEST ["phone"]);
    $teacher->setAddress($_REQUEST ["address"]);
    $teacher->setEmail($_REQUEST ["email"]);
    $teacher->setPassword($_REQUEST ["password"]);
    $teacher->setSchool($_REQUEST ["school"]);
    $teacher->addTeacher();

}else if($operacion=="update"){
    $teacher->setDni($_REQUEST ["dni"]);
    $teacher->setName($_REQUEST ["name"]);
    $teacher->setSurname($_REQUEST ["surname"]);
    $teacher->setBirthday($_REQUEST ["birthday"]);
    $teacher->setPhone($_REQUEST ["phone"]);
    $teacher->setAddress($_REQUEST ["address"]);
    $teacher->setEmail($_REQUEST ["email"]);
    $teacher->setPassword($_REQUEST ["password"]);
    $teacher->setSchool($_REQUEST ["school"]);
    $teacher->setIdTeacher($_REQUEST ["idteacher"]);
    $teacher->updateTeacher();

}else if($operacion=="delete"){
    $teacher->setIdTeacher($_REQUEST ["id"]);
    $result=$teacher-> deleteTeacher();
    echo $result;
}
?>