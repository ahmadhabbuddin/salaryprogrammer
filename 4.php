<?php 
function changeWord($text, $word1, $word2){
    
    $newText = "";
    $arrText = str_split($text);
    
    for( $x = 0; $x < strlen($text) ; $x++){
        if( $word1 == $arrText[$x] ){
             $temp = $word2;
             $arrText[$x] = $temp;
        }
        $newText.= $arrText[$x];
    }
    
    
    return $newText;
    
}

echo changeWord("Tuban", 'a', 'u');