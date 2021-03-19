<?php

  function deletarElemento($vetor, $elementoASerDeletado){


    foreach($vetor as $chave => $elemento){


      if($elemento == $elementoASerDeletado){

      
        unset($vetor[$chave]);

        
        return $vetor;

      }

    }
    
    return false;

  }

  $vetor = [1,56,9, "ônibus", "trêm", "metrô", "articulado"];

  $novoVetor = deletarElemento($vetor, "articulado");

  print_r($novoVetor);