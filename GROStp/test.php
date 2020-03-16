<?php

include_once 'index.html';

//$codebarre = new CodeBarre(12345678);


$tableau_a = [
    0 => "0001101",
    1 => "0011001",
    2 => "0010011",
    3 => "0111101",
    4 => "0100011",
    5 => "0110001",
    6 => "0101111",
    7 => "0111011",
    8 => "0110111",
    9 => "0001011"
];

$tableau_b =  [
    0 => "0100111",
    1 => "0110011",
    2 => "0011011",
    3 => "0100001",
    4 => "0011101",
    5 => "0111001",
    6 => "0000101",
    7 => "0010001",
    8 => "0001001",
    9 => "0010111"
];

$tableau_c =  [
    0 => "1110010",
    1 => "1100110",
    2 => "1101100",
    3 => "1000010",
    4 => "1011100",
    5 => "1001110",
    6 => "1010000",
    7 => "1000100",
    8 => "1001000",
    9 => "1110100"
];

$debut = "101";
$milieu = "01010";
$fin = '101';

$element_A = "";
$element_C = "";

$barre = $_POST['code'];

$code = str_split($barre);

for ($i=0; $i<4; $i++){
    $element_A .= $tableau_a[$code[$i]];
}

for ($j=4;$j<8;$j++){
   $element_C .= $tableau_c[$code[$j]];
}

$code_barre = $debut.$element_A.$milieu.$element_C.$fin ;
$code_barre = str_split($code_barre);

foreach ($code_barre as $key => $value){
    if($value == '1'){
        echo '<div class="noir"></div>';
    }else{
        echo '<div class="blanc"></div>';
    }
}


