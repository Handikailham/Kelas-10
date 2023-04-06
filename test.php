<?php

#variable

$number = 30;
$number = $number * 2;
echo $number;
echo '<br>';

$nama_depan = "muhammad, zifa, hannaya";
$nama_belakang = "zidan";
$nama_lengkap = $nama_depan . " " . $nama_belakang;
echo $nama_lengkap;
echo '<br>';
echo '<br>';

#array

$array = array('nama', 'alamat', 'email', 33);
var_dump($array);
echo '<br>';

$array2['nama'] = "Doni";
$array2['alamat'] = "Depok";
$array2['email'] = "Doni@gmail.com";
$array2['no_hp'] = "08";
print_r($array2);

$array3 = array (
        'nama' => 'Doni',
        'alamat' => 'Depok',
        'email' => 'Doni@gmail.com',
        'no_hp' => '08',
);
print_r($array3);
?>