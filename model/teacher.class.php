<?php
include("database.class.php");

class Teacher{
    private $idTeacher=null;
    private $dni=null;
    private $name=null;
    private $surname=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    public function addTeacher(){
        //crear consulta
        $sql="INSERT INTO teachers (teacher_dni, teacher_surname, teacher_name, teacher_birthday, teacher_phone, teacher_address, teacher_email, teacher_password, teacher_school) VALUES (".$this->teacher_dni.", '".$this->teacher_surname."', '".$this->teacher_name."', '".$this->teacher_birthday."', '".$this->teacher_phone."', '".$this->teacher_address."', '".$this->teacher_email."', '".$this->teacher_password."', '".$this->teacher_school."')";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }

    public function updateTeacher(){
        $sql="UPDATE teachers SET teacher_dni=".$this->teacher_dni.", teacher_surname='".$this->teacher_surname."', teacher_name='".$this->teacher_name."', teacher_birthday='".$this->teacher_birthday."', teacher_phone='".$this->teacher_phone."', teacher_address='".$this->teacher_address."', teacher_email='".$this->teacher_email."', teacher_password='".$this->teacher_password."', teacher_school='".$this->teacher_school."' WHERE idTeacher=".$this->teacher_idTeacher;
        print $sql;
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }
    
    public function deleteTeacher(){
        $sql="DELETE FROM teachers WHERE teacher_idTeacher=".$this->teacher_idTeacher." ";
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
      //  $this->conexion->close();
        return $result;
    }

    

}

?>