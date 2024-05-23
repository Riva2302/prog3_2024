<?php
// HOL
include("database.class.php");

class Student{
    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $user=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $user, $password, $school, $conexion){
        $this->dni=$dni;
        $this->surname=$surname;
        $this->name=$name;
        $this->birthday=$birthdate;
        $this->phone=$phone;
        $this->address=$address;
        $this->email=$email;
        $this->user=$user;
        $this->password=$password;
        $this->school=$school;
    }



    public function addStudent(){
        //crear la consulta
        $sql="INSERT INTO students (dni, surname, name, birthdate, phone, address, email, user, password, school) VALUES (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthdate."', '".$this->phone."', '".$this->address."', '".$this->password."', '".$this->school."')";
        $this->conexion=new Database();
        $this->conexion-query($sql);
        $this->conexion->close();
        return $result;
    }
    public function editStudent(){
        $sql="UPDATE student SET dni=".$this->dni." surname='".$this->surname."' name='".$this->name."' birthdate='".$this->birthdate."' phone='".$this->phone."' address='".$this->address."' email='".$this->email."' user='".$this->user."' password='".$this->password."' school='".$this->school."' WHERE idStudent=".$this->idStudent;
        $this->conexion=new Database();
        $this->conexion-query($sql);
        $this->conexion->close();
        return $result;
    }
    public function deleteStudent(){
        $sql="DELETE FROM students WHERE idStudent=".$this->idStudent."";
        $this->conexion=new Database();
        $this->conexion-query($sql);
        $this->conexion->close();
        return $result;

    }
    public function getStudent(){
        $sql="SELECT * FROM students WHERE idStudent=".$this->idStudent." ";
        $this->conexion=new Database();
        $this->conexion-query($sql);
        $this->conexion->close();
        return $result;
        if ($result){
            if($row=$result->fetch_assoc()){
                $this->dni=$row("dni");
                $this->name=$row("name");
                $this->surname=$row("surname");
                $this->birthdate=$row("birthdate");
                $this->phone=$row("phone");
                $this->address=$row("address");
                $this->email=$row("email");
                $this->password=$row("password");
                $this->school=$row("school");
            return true;
            }
        }
    }
    public function getAllStudents(){
        
    }

    // geeter y setter
    public function getIdStudent(){
        return $this->idStudent;
    }
    public function setIdStudent(){
        $this->idStudent=$idStudent;
    }
}

?>