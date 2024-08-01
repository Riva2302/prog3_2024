<?php
    include ("database.class.php");
    
    class activity{
        private $idActivity=null;
        private $idSubject=null;
        private $name=null;
        private $description=null;
        private $ruta=null;
        private $idPlanning=null;
        private $idCurso=null;
        private $conexion=null;
    }

    public function addActivity(){
        //crear consulta
        $sql="INSERT INTO activities (dni, surname, name, birthday, phone, address, email, password, school) VALUES (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthday."', '".$this->phone."', '".$this->address."', '".$this->email."', '".$this->password."', '".$this->school."')";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }


?>