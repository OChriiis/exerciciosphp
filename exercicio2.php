<?php

function verificarNomes(array $vetorNomes, $nomeEspecifico){

    $nomeEspecifico = "Joana";  
  
    foreach($vetorNomes as $nome){

    
    
    } 

   
    if(in_array($nomeEspecifico, $vetorNomes)){
        
        return $nomeEspecifico;

    } else {
        echo "False";
    }
}

echo verificarNomes(["Maria", "Josoe", "Juliette"],[]);

  

?>

