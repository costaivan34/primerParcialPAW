<?php 

require './models/encuesta.php';
require './models/item.php';
$form = new encuesta(null);
$it = new item(null);
$miVector = null;

require './views/index2.view.php';

if($_POST){
    if(!validaNombre($_POST['Nombre'])) {
     echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
    }else{
        $form->this.setNombre($_POST['Nombre']);
        if( !validaNombre($_POST['Apellido']) ) { 
        echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
       }else{         
        $form->this.setApellido($_POST['Apellido']);
        if( !validaMail($_POST['Mail']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{        
       $form->this.setMail($_POST['Mail']);
        if($_POST['other']){
            $it->this.setNombre($_POST['other']);
            $it->this.setCant(1);
            $miVector->push(it); 
         }
           if($_POST['lenguaje1']){
            $form->this.setLenguaje($_POST['lenguaje1']);
            $it->this.setNombre($_POST['lenguaje1']);
            for($i=0;$i<sizeof($miVector);$i++){
            $buscarClase = $miVector[$i];
            if(($buscarClase->this.getNombre())==$_POST['lenguaje1']){
                $cant=$buscarClase->this.getCant();
                $buscarClase->this.setCant($cant++);
                $mivector->set($i, $buscarClase);
            }    
         }
           }
    }
    }
}
}
   function validaNombre($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
}

 function validaMail($value){
    if(filter_var($value, FILTER_VALIDATE_EMAIL)=== FALSE){
      return false;
   }else{
      return true;
   }
}

?>
