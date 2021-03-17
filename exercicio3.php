<?php

function inverte(array $inverte){

$inverte_copy = array_reverse($inverte); //NÃO ESTOU TROCANDO A POSIÇÃO E SIM FAZENDO UMA CÓPIA DO ARRAY, AI ITERAMOS EM CIMA DO ARRAY COPIADO
    
        foreach($inverte_copy as $invertido){

            echo $invertido;
    
        } 
    
    }
    
    inverte([" Olá", 1 , 2 . " " , "Trinta "]);
    
    ?>



