<?php
$connect = mysqli_connect('18.119.112.16','tungne','123@123','titishop');
mysqli_set_charset($connect, 'UTF8');
if (!$connect){
    echo "ket noi that bai";
}
?>