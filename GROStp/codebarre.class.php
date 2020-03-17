<?php

class CodeBarre
{

    private  $tableau_a = [
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
    private  $tableau_b =  [
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
    private  $tableau_c =  [
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


    private  $debut = "101";
    private  $milieu = "01010";
    private  $fin = '101';
    private  $code;
    private  $element_A = "";
    private  $element_C = "";
    private  $barre = "";

    public function __construct($code)
    {
        $this->code =$code;
    }

    public function getCode(){
        $this->code ;
    }

    public function setCode($code){
        $this->code = $code;
    }

    public function genere(){


        $this->code = str_split($this->code);


        for ($i=0; $i<4; $i++){
            $this->element_A .= $this->tableau_a[$this->code[$i]];
        }

        for ($j=4;$j<8;$j++){
            $this->element_C .= $this->tableau_c[$this->code[$j]];
        }
    }

    public function affiche(){

        $this->genere();

        $zero_un = $this->debut.$this->element_A.$this->milieu.$this->element_C.$this->fin ;
        $zero_un = str_split($zero_un);

        foreach ($zero_un  as $key => $value){
            if($value == '1'){
                echo '<div class="noir"></div>';
            }else{
                echo '<div class="blanc"></div>';
            }
        }
    }
}







