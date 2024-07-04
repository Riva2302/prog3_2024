<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>

</head>
<body>
    <h1>Panel de estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>ID Estudiante</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Fecha Nac.</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("./model/student.class.php");
            $student= new Student();
            $allStudents=$student->getAllStudents();
            if($allStudents){
                foreach($allStudents as $data){
                    print"<tr>";
                    print"<td>".$data["idStudent"]."</td>";
                    print"<td>".$data["surname"]."</td>";
                    print"<td>".$data["name"]."</td>";
                    print"<td>".$data["dni"]."</td>";
                    print"<td>".$data["birthday"]."</td>";
                    print"<td>".$data["phone"]."</td>";
                    print "<td><input type='button' name='editar' value='Editar' onclick=\"location.href='formEditStudent.php?idStudent=".$data["idStudent"]."';\" /></td>";
                    print "<td><input type='button' name='eliminar' value='Eliminar' onclick='askDeleteStudent(".$data['idStudent'].");'/></td>";
                    print"</tr>";
                }
            }else{
                print"No existe ningun estudiante";
            }
            ?>
        </tbody>
    </table>

</body>
<script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<script src="js/funciones.js"></script>


</html>