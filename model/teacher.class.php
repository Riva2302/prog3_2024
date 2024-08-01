<?php
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
        $sql="INSERT INTO teachers (dni, surname, name, birthday, phone, address, email, password, school) VALUES (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthday."', '".$this->phone."', '".$this->address."', '".$this->email."', '".$this->password."', '".$this->school."')";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }

    public function updateTeacher(){
        $sql="UPDATE teachers SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."', birthday='".$this->birthday."', phone='".$this->phone."', address='".$this->address."', email='".$this->email."', password='".$this->password."', school='".$this->school."' WHERE idTeacher=".$this->idTeacher;
        print $sql;
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }
    
    public function deleteTeacher(){
        $sql="DELETE FROM teachers WHERE idTeacher=".$this->idTeacher." ";
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
      //  $this->conexion->close();
        return $result;
    }
}

?>