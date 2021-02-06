<?php
$host   =   "localhost";
$user   =   "root";
$pass   =   "";
$db     =   "kampungbunga";

$connect    =   mysqli_connect($host,$user,$pass);
$select     =   mysqli_select_db($connect, 'kampungbunga');

if($select){
    echo'';
} else{
    echo'gagal koneksi ke database';
}



?>