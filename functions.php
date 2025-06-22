<?php 

//===================== TPE 1 =====================//

function nombre_caracteres($n){
    echo "Le nombre de caractères est : " . strlen($n) . "<br>";
}

function nombreMaj($n){
    $maj = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if (ord($n[$i]) > 64 && ord($n[$i]) < 96){
            $maj++;
        }
    }
    echo "Le nombre de majuscules est  " . $maj . " et ";
}

function nombreMin($n){
    $min = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if (ord($n[$i])>96 && ord($n[$i])<123){
            $min++;
        }
    }
    echo "le nombre de minuscules est  " . $min . "<br>"; 
}

function nombreChiffres($n){
    $chiffres = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if (ord($n[$i])>47 && ord($n[$i])<58){
            $chiffres++;
        }
    }
    echo "Le nombre de chiffres est : " . $chiffres . "<br>";
}

function nombre_caractereSpeciaux($n){
    $caractèreSpéciaux = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if ((ord($n[$i])>32 && ord($n[$i])<48) || (ord($n[$i])>57 && ord($n[$i])<65) || ($n[$i]>90 && $n[$i]<97) || ($n[$i]>122 && $n[$i]<127)){
            $caractèreSpéciaux++;
        }
    }
    echo "Le nombre de caractères spéciaux est : " . $caractèreSpéciaux . "<br>";
}


//===================== TPE 2 =====================//

function palindrome($n){
    for ($i = 0; $i < strlen($n); $i++){
        if ((strtoupper($n[$i]) == $n[strlen($n)-1-$i])|| (strtolower($n[$i]) == $n[strlen($n)-1-$i])){
            $rep=True;
        }else{
            $rep=False;
        }
    }
    if ($rep == True){
        echo "La chaîne est un palindrome<br>";
    }else{
        echo "La chaîne n'est pas un palindrome<br>";
    }
}

//===================== TPE 3 =====================//

function nombreMots($n){
    $mots = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if ($n[$i] == " " || $n[$i] == "," || $n[$i] == ";"){ 
            $mots++;
        }
    }
    echo "Le nombre de mots est : " . ($mots + 1) . "<br>";
}

function nombrePhrases($n){
    $phrases = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if ($n[$i] == "." || $n[$i] == "!" || $n[$i] == "?"){
            $phrases++;
        }
    }
    echo "Le nombre de phrases est : " . ($phrases + 1) . "<br>";
}

function longMoyMo($n){
    $mots = 0;
    $Mlongueur = 0;
    for ($i = 0; $i < strlen($n); $i++){
        if ($n[$i]  != " " && $n[$i] != "," && $n[$i] != ";"){
            $Mlongueur++;      
        }else{
            if($n[$i] == " " || $n[$i] == "," || $n[$i] == ";"){
                $mots++;
            }

        }
    }
    echo "La longueur totale des mots est : " . $Mlongueur . "<br>";
    $Mlongueur= $Mlongueur / ($mots + 1);
    echo "Le nombre de mots est : " . ($mots + 1) . "<br>";
    echo "La longueur moyenne des mots dans ce tableaux est $Mlongueur";

}

//===================== TPE 4 =====================//

function IntToEnlish($n){
    $unites = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
    $specials = array("ten" => 10, "eleven" => 11, "twelve" => 12, "thirteen" => 13, 
    "fourteen" => 14, "fifteen" => 15, "sixteen" => 16, 
    "seventeen" => 17, "eighteen" => 18, "nineteen" => 19);
    $dizaines = array("", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
    
    if ($n < 10) {
        echo $unites[$n];
    } elseif ($n < 20) {
        foreach ($specials as $word => $value) {
            if ($n == $value) {
                echo $word;
            }
        }
    } elseif ($n < 100) {
        $unite = intval($n % 10);
        $dizaine = intval($n / 10);

        echo $dizaines[$dizaine];
        if ($unite > 0) {
            echo "-" . $unites[$unite];
        }
        
    } elseif ($n < 1000) {
        $unite = intval($n % 10);
        $dizaine = intval(($n % 100) / 10);
        $centaine = intval($n / 100);

        echo $unites[$centaine] . " hundred";
        if ($dizaine > 0) {
            echo " " . $dizaines[$dizaine];
        }
        if ($unite > 0) {
            echo "-" . $unites[$unite];
        }
    } else {
        $unite = intval($n % 10);
        $dizaine = intval(($n % 100) / 10);
        $centaine = intval(($n % 1000) / 100);
        $millier = intval($n / 1000);

        echo $unites[$millier] . " thousand";
        if ($centaine > 0) {
            echo " " . $unites[$centaine] . " hundred";
        }
        if ($dizaine > 0) {
            echo " " . $dizaines[$dizaine];
        }
        if ($unite > 0) {
            echo "-" . $unites[$unite];
        }
    }
}

//===================== TPE 5 =====================//
function DecompoProduitFact($n) {
    echo "$n : ";

    $nbrPremier = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
    $resultat = [];

    for ($i = 0; $i < sizeof($nbrPremier); $i++) {
        $base = $nbrPremier[$i];
        if ($n % $base == 0) {
            $exposant = 0;
            while ($n % $base == 0) {
                $exposant++;
                $n = $n / $base;
            }
            $resultat[] = "$base<sup>$exposant</sup>";
        }
    }

    echo implode(" * ", $resultat);
}

//===================== TPE 6 =====================//

function genererAnagrammes($lettres, $prefixe = "") {
    $n = strlen($lettres);
    if ($n == 0) {
        echo $prefixe . "   ";
    } else {
        for ($i = 0; $i < $n; $i++) {
            $lettre = $lettres[$i];
            $reste = substr($lettres, 0, $i) . substr($lettres, $i + 1);
            genererAnagrammes($reste, $prefixe . $lettre);
        }
    }
}

?>