<?php

include("../model/teacher.class.php");
$operacion=$_REQUEST["operation"];
$teacher= new Teacher(); //creamos el objeto teacher de tipo Teacher

if($operacion=="add"){
    $teacher->setDni($_REQUEST ["teacher_dni"]);
    $teacher->setName($_REQUEST ["teacher_name"]);
    $teacher->setSurname($_REQUEST ["teacher_surname"]);
    $teacher->setBirthday($_REQUEST ["teacher_birthday"]);
    $teacher->setPhone($_REQUEST ["teacher_phone"]);
    $teacher->setAddress($_REQUEST ["teacher_address"]);
    $teacher->setEmail($_REQUEST ["teacher_email"]);
    $teacher->setPassword($_REQUEST ["teacher_password"]);
    $teacher->setSchool($_REQUEST ["teacher_school"]);
    $teacher->addTeacher();

}else if($operacion=="update"){
    $teacher->setDni($_REQUEST ["teacher_dni"]);
    $teacher->setName($_REQUEST ["teacher_name"]);
    $teacher->setSurname($_REQUEST ["teacher_surname"]);
    $teacher->setBirthday($_REQUEST ["teacher_birthday"]);
    $teacher->setPhone($_REQUEST ["teacher_phone"]);
    $teacher->setAddress($_REQUEST ["teacher_address"]);
    $teacher->setEmail($_REQUEST ["teacher_email"]);
    $teacher->setPassword($_REQUEST ["teacher_password"]);
    $teacher->setSchool($_REQUEST ["teacher_school"]);
    $teacher->setIdTeacher($_REQUEST ["teacher_idteacher"]);
    $teacher->updateTeacher();

}else if($operacion=="delete"){
    $teacher->setIdTeacher($_REQUEST ["id"]);
    $result=$teacher-> deleteTeacher();
    echo $result;
}

?>