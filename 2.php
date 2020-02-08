<?php

function validation($username, $password){
    
    // check username
    if( preg_match("/^[a-z]{5,9}$/", $username) ){
        // check password
        if( preg_match("/^[a-z]+[A-Za-z]+\W+[0-9]/", $password) && strlen($password) >= 8 ){
            echo "validation success";
        }else{
            echo "password min 8 karakter, merupakan kombinasi huruf kecil, huruf besar, angka, dan karakter";
        }
    }else{
        echo "karakter berupa huruf kecil (min 5char, max 9char)";
    }
    
}

validation("ahmad", "codeYourFuture!123");