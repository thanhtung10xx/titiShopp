<?php
$connect = mysqli_connect('3.141.42.181','tungne','123@123','titishop');
mysqli_set_charset($connect, 'UTF8');
if (!$connect){
    echo "ket noi that bai";
}
?>