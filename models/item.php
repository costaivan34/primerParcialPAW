<?php
class item {
    private $fields = ['nombre','cant'];
    
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
    
    public function setCant($value){
        $this->$fields['cant'] = $value;    
    }
      
    public function getNombre(){ 
        return $this->$fields['nombre'] = $value;      
        
    }
    
    public function getCant(){
       return $this->$fields['cant'] = $value;    
    }

    
    
   
 
}
