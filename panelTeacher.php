<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Profesores</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>

</head>
<body>
    <h1>Panel de Profesores</h1>
    <table>
        <thead>
            <tr>
                <th>Apellido:</th>
                <th>Nombre:</th>
                <th>DNI:</th>
                <th>Fecha Nacimiento:</th>
                <th>Tel&eacute;fono:</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("./model/teacher.class.php");
            $teacher= new Teacher();
            $allTeachers=$teacher->getAllTeachers();
            if($allTeachers){
                foreach($allTeachers as $data){
                    print"<tr>";
                    print"<td>".$data["idTeacher"]."</td>";
                    print"<td>".$data["surname"]."</td>";
                    print"<td>".$data["name"]."</td>";
                    print"<td>".$data["dni"]."</td>";
                    print"<td>".$data["birthday"]."</td>";
                    print"<td>".$data["phone"]."</td>";
                    print "<td><input type='button' name='editar' value='Editar' onclick=\"location.href='formEditTeacher.php?idTeacher=".$data["idTeacher"]."';\" /></td>";
                    print "<td><input type='button' name='eliminar' value='Eliminar' onclick='askDeleteTeacher(".$data['idTeacher'].");'/></td>";
                    print"</tr>";
                }
            }else{
                print"No existe ningun docente";
            }
            ?>
        </tbody>
    </table>

</body>