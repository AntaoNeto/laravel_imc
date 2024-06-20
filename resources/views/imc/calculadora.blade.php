<?php 
  require "../controller/controllerimc.php"; 

  $imc = new imc();

  $imc->peso = 90;
  $imc->altura = 1.71;

  $resultadoimc = $imc->calcularimc();
  //$classificacao = $imc->classeimc();

  echo "seu IMC é:  ".$resultadoimc.
  "<br>";
  //echo "classificacao:  ".$classicacao;
  ?>