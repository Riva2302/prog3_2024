<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Docente</title>
</head>
<body>
    
    <form method="POST" name="formAddTeacher" action="controller/teacher.controller.php">
    <input type="hidden" name="operation" value="add"/>
    <label>DNI:</label><input type="text" name="teacher_dni"><br> 
    <label>Nombre:</label><input type="text" name="teacher_name"><br>
    <label>Apellido:</label><input type="text" name="teacher_surname"><br>
    <label>Direcci&oacute;n:</label><input type="text" name="teacher_address"><br>
    <label>Tel&eacute;fono:</label><input type="text" name="teacher_phone"><br>;
    <label>E-mail:</label><input type="email" name="teacher_email"><br>;
    <label>Fecha Nac:</label><input type="date" name="teacher_birthday"><br>;
    <label>Contrase&ntilde;a:</label><input type="text" name="teacher_password"><br>;
    <label>Colegio</label><input type="text" name="teacher_school"><br>;
    <button type="submit" name="aceptar">Aceptar</button>
    <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>