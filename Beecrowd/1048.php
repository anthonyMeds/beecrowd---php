<?php
$salario = fgets(STDIN);
$reajuste = [15,12,10,7,4];

if($salario > 0 && $salario <= 400){
    $novosalario = $salario + (($reajuste[0] / 100) * $salario);
    $diferenca = $novosalario - $salario;
   
   echo "Novo salario: ".number_format($novosalario, 2, '.', '').PHP_EOL;
   echo "Reajuste ganho: ".number_format($diferenca, 2, '.', '').PHP_EOL;
   echo "Em percentual: ".$reajuste[0]." %".PHP_EOL;
       return;
   }

if($salario > 400 && $salario <= 800){
    $novosalario = $salario + (($reajuste[1] / 100) * $salario);
    $diferenca = $novosalario - $salario;
   
   echo "Novo salario: ".number_format($novosalario, 2, '.', '').PHP_EOL;
   echo "Reajuste ganho: ".number_format($diferenca, 2, '.', '').PHP_EOL;
   echo "Em percentual: ".$reajuste[1] ." %".PHP_EOL;
       return;
   }

if($salario > 800 && $salario <= 1200){
    $novosalario = $salario + (($reajuste[2] / 100) * $salario);
    $diferenca = $novosalario - $salario;
   
   echo "Novo salario: ".number_format($novosalario, 2, '.', '').PHP_EOL;
   echo "Reajuste ganho: ".number_format($diferenca, 2, '.', '').PHP_EOL;
   echo "Em percentual: ".$reajuste[2] ." %".PHP_EOL;
       return;
   }

   if($salario > 1200 && $salario <= 2000){
    $novosalario = $salario + (($reajuste[3] / 100) * $salario);
    $diferenca = $novosalario - $salario;
   
   echo "Novo salario: ".number_format($novosalario, 2, '.', '').PHP_EOL;
   echo "Reajuste ganho: ".number_format($diferenca, 2, '.', '').PHP_EOL;
   echo "Em percentual: ".$reajuste[3] ." %".PHP_EOL;
       return;
   }
   
   $novosalario = $salario + (($reajuste[4] * $salario) / 100);
   $diferenca = $novosalario - $salario;
  
  echo "Novo salario: ".number_format($novosalario, 2, '.', '').PHP_EOL;
  echo "Reajuste ganho: ".number_format($diferenca, 2, '.', '').PHP_EOL;
  echo "Em percentual: ".$reajuste[4] ." %".PHP_EOL;
      return;
  ?>