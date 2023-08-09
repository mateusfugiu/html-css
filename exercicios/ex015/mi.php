<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "empresa";


$con = mysqli_connect($servername,$username,$password,$db_name);

if (!$con){
    die (("Ocorreu um erro:").mysqli_connect_error());


}