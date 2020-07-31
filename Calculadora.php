<?php

class Calculadora
{
  public function calculaMedia(array $array) : ?float
  {
    if ($array > 0){
      $quantidadeNotas = sizeof($array);

      $soma = 0;

      for ($i=0; $i < $quantidadeNotas; $i++){
        $soma += $array[$i];
      }

      $media = $soma / $quantidadeNotas;

      return $media;
    }else{
      return null;
    }
  }
}