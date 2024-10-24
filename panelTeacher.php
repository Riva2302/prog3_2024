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
                    print"<td>".$data["id_teacher"]."</td>";
                    print"<td>".$data["teacher_surname"]."</td>";
                    print"<td>".$data["teacher_name"]."</td>";
                    print"<td>".$data["teacher_dni"]."</td>";
                    print"<td>".$data["teacher_birthday"]."</td>";
                    print"<td>".$data["teacher_phone"]."</td>";
                    print "<td><input type='button' name='editar' value='Editar' onclick=\"location.href='formEditTeacher.php?id_teacher=".$data["id_teacher"]."';\" /></td>";
                    print "<td><input type='button' name='eliminar' value='Eliminar' onclick='askDeleteTeacher(".$data['id_teacher'].");'/></td>";
                    print"</tr>";
                }
            }else{
                print"No existe ningun docente";
            }
            ?>
        </tbody>
    </table>

</body>