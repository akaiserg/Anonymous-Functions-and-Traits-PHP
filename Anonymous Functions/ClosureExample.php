<?php


$txt= "hello word!<br>";
// closure. Anonymous function variable assignment, inheriting variables from the parent scope
$hello= function () use ($txt) {
    echo $txt;
};
//called to the function
$hello();

/****************************************/
$txt2= "hello word2!<br>";
// anonymous function   variable assignment
$say= function($param){
    echo $param;
};

// anonymous function  which uses other anonymous function
$hello2= function () use ($txt2,$say) {
    $say($txt2);
};
// other way
$hello3= function ($txt2) use ($say) {
    $say($txt2);
};

$hello2();
$txt2= "hello word3!<br>";
$hello2();// the value of $txt2 was changed, but  the closure works with the older one
$hello3($txt2);