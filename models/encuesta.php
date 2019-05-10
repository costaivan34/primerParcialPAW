<?php

class encuesta {
    private $fields = ['nombre','apellido', 'mail', 'lenguaje'];
    
    public function __construct()
    {
     //   $this->Model->__construct(null);
      //  $this->$fields
       // $this->db_handler = DatabaseBuilder::getInstance();
       // $this->build($data);
    }
    
    
    public function setNombre($value){ 
        $this->$fields['nombre'] = $value;      
        
    }
    
    public function setMail($value){
        $this->$fields['mail'] = $value;    
    }
    
    
    public function setApellido($value){
        $this->$fields['apellido'] = $value;
    }
    
     public function setLenguaje($value){
        $this->$fields['lenguaje'] = $value;
    }
    
    
   
 
}
?>
