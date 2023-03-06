<?php
$string = explode(" ", fgets(STDIN));
$n1 = $string[0] * 2;
$n2 = $string[1] * 3;
$n3 = $string[2] * 4;
$n4 = $string[3] * 1;
$pesos = 2  + 3 + 4 + 1;

$media = ($n1 + $n2 + $n3 + $n4) / $pesos;

echo "Media: ".number_format($media, 1,'.',' ')."\n";


if($media >= 7.0)
{
    echo "Aluno aprovado.\n";
} elseif($media < 5){
    echo "Aluno reprovado.\n";
} else {
    echo "Aluno em exame.\n";

    $examScore = floatval(fgets(STDIN));

    echo "Nota do exame: ".number_format($examScore,1,'.','')."\n";

    $mediaFinal = ($media + $examScore) / 2;

    if($mediaFinal >= 5.0){
        echo "Aluno aprovado.\n";
        echo "Media final: ".number_format($mediaFinal,1,'.','')."\n";
    } else{
        echo "Aluno reprovado.\n";
        echo "Media final: ".number_format($mediaFinal,1,'.','')."\n";
    }
    }


?>