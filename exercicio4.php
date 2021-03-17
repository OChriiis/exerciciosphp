<?php

function deletaValor(array $vetorValores, $valorQualquer){

    

    $valorQualquer = 66;
     
  
    foreach($vetorValores as $valor){
      
        if(in_array($valorQualquer, $vetorValores)){
        
            unset($vetorValores[$valorQualquer]);
            
            return $vetorValores;
      
          } 
          
          else {
              echo "False";
          }
       
    } 
   
}


print_r(deletaValor([2, 5, 9],[5])) 

  

?>