<?php
include ("model/student.class.php");
$id=$_REQUEST["idStudent"];
$student= new Student();
$student->setIdStudent($id);
$student->getStudent();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de editicion de estudiantes</title>
</head>
<body>
    <form action="controller/student.controller.php" name="editStudent" method="POST">
        <input type="hidden" name="idStudent" value="<?=$student->getIdStudent()?>">
        <input type="hidden" name="operation" value="edit">
        <label>DNI:</label> <input type="text" name="dni" value="<?=$student->getDni();?>"><br>
        <label>Nombre:</label> <input type="text" name="name" value="<?=$student->getName();?>"><br>
        <label>Apellido:</label> <input type="text" name="surname" value="<?=$student->getSurname();?>"><br>
        <label>Direccion:</label> <input type="text" name="address" value="<?=$student->getAddress();?>"><br>
        <label>Telefono:</label> <input type="text" name="phone" value="<?=$student->getPhone();?>"><br>
        <label>E-mail:</label> <input type="text" name="email" value="<?=$student->getEmail();?>"><br>
        <label>Fecha de nacimiento:</label> <input type="text" name="birthdate" value="<?=$student->getBirthdate();?>"><br>
        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>