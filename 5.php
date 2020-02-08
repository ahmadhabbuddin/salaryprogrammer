<?php

function fibo($col, $row){
    $fibo[1] = 0;
    $fibo[2] = 1;
    $n = $col*$row;
    if( is_numeric($col) && is_numeric($row) ){
        
        for($i = 3; $i<=$n; $i++){
            $fibo[$i] = $fibo[$i-1]+$fibo[$i-2];
        }
        $z =1;
        for($x = 1; $x<=$row; $x++){
            
            for( $y = $z; $y <= ($col*$x); $y++){
                echo $fibo[$y].",";
            }
            $z = $x*4+1;
            echo "\n";
        }
       
    }else{
       echo "Input Harus berupa angka";
    }
   
}

fibo(4, 3);