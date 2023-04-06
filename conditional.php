<?php

$makan = 'mie';
$makan2 = 'sate';
$makan3 = 'sate';

if($makan == 'mie'){
    echo 'bener';
}else {echo 'salah';
}

if($makan != 'mie'){
    echo 'bener';
}else {echo 'salah';
}

if($makan2 === $makan3) :
    echo 'bener';
else :
    echo 'salah';
endif;

$a = '2';
switch ($a){
    echo 'benar 2';
    break;

    case '1';
    echo 'salah';
    break;
default:
    echo 'salah';
    break;
} 
?>