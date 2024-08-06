<?php
    include ("database.class.php");
    
    class Activity{
        private $idActivity=null;
        private $name_activity=null;
        private $description=null;
        private $name_teacher=null;
        private $name_subject=null;
        private $ruta_file=null;
        private $curso=null;
        private $division=null;
        private $conexion=null;
    

    public function addActivity(){
        //crear consulta
        $sql="INSERT INTO activities () VALUES ()";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        //$this->conexion->close();
        return $result;
    }

    public function deleteActivity(){

    }
    public function updateActivity(){

    }
    public function getActivity(){

    }


    }

?>