<?php
include("model/teacher.class.php");
$id=$_REQUEST["idTeacher"];
$Teacher= new Teacher(); //creamos el objeto
    $Teacher->setIdTeacher($id);
    $Teacher->getTeacher();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Modificacion de Docentes</title>
</head>

<body>
    <form name="editTeacher" method="POST" action="controller/teacher.controller.php">
        <input type="hidden" name="idTeacher" value="<?=$Teacher->getIdTeacher()?>">
        <input type="hidden" name="operation" value="update"/>
        <label>DNI:</label><input type="text" name="dni" value="<?=$Teacher->getDni();?>"><br>;
        <label>Nombre:</label><input type="text" name="name" value="<?=$Teacher->getName();?>"><br>;
        <label>Apellido:</label><input type="text" name="surname" value="<?=$Teacher->getSurname();?>"><br>;
        <label>Direcci&oacute;n:</label><input type="text" name="address" value="<?=$Teacher->getAddress();?>"><br>;
        <label>Tel&eacute;fono:</label><input type="text" name="phone"value="<?=$Teacher->getPhone();?>"><br>;
        <label>E-mail:</label><input type="email" name="email" value="<?=$Teacher->getEmail();?>"><br>;
        <label>Fecha Nac:</label><input type="date" name="birthday" value="<?=$Teacher->getBirthday();?>"><br>;
        <label>Contrase&ntilde;a:</label><input type="text" name="password" value="<?=$Teacher->getPassword();?>"><br>;
        <label>Colegio:</label><input type="text" name="school" value="<?=$Teacher->getSchool();?>"><br>;
        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>