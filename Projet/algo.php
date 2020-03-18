
<?php
$a = 15;
$b = 20;
$temp = 0;

// 1 - Afficher le plus grand
if ($a > $b){
    echo "A est plus grand que B: $a";
}
elseif ($a < $b){
    echo "B est plus grand que A: $b";
}
elseif ($a==$b){ 
    echo "A et B sont identiques";
}
else{
    echo "Pas de chiffre";
}
   


echo '<br><br>';
// 3 - Inverser les valeurs A et B
$temp = $b;
$b = $a;
$a = $temp;

    echo "La variable a est de :$a" ;
        echo '<br>';
    echo "La variable b est de :$b" ;

echo '<br>';
// 4 - Additionner les variables
$resultat = $a + $b;
    echo "Le résultat est : $resultat";

echo '<br><br>';
// 5 - Nombre aléatoire entre 1 et 100
$resultat_rand = rand (1,100);
   echo "Le nombre aléatoire est : $resultat_rand";
echo '<br>';
// 6 - Nombre aléatoire entre 1 et 5
   $resultat_rand = rand (1,5);
   echo "Le nombre aléatoire est : $resultat_rand";

echo '<br><br>';
// nombre aléatoire si <50 "je suis nul" sinon "je suis bon"
$resultat_rand1 = rand (0,100);
    
    if ($resultat_rand1<50){
        echo "Je suis nul ";
    }
    else{
        echo "Je suis bon ";
    }
    echo $resultat_rand1;

echo '<br><br>';
// fonction nombre aléatoire entre 1 et 5

function aleas ($x){
$result = $x;
return $result;
}

$a = rand (1, 5); 
$res1 = aleas($a);
    echo $res1;

if ($x==1){
    echo "AAAA";}
    elseif ($x==2){
    echo "BBBB";}
        elseif ($x==3){
        echo "CCCC";}
            elseif ($x==4){
            echo "DDDD";}
else{
    echo "Je suis une perruche";
}

?>

