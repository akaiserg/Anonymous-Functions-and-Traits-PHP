<?php

// normal function
function say($helloParam){

    echo   $helloParam;

}
// normal function which uses an anonymous function
function hello($hellAnonymous,$text){

    echo   $hellAnonymous($text);

}

// anonymous function
$hello= function ($param) {
    echo $param;
};

echo say("hello word!");
$hello("hello word!");
hello($hello,"hello word!");