<?php

$connect = mysqli_connect('localhost','root','root','quotes_database');
mysqli_set_charset( $connect, 'UTF8' );
if(mysqli_connect_error()){
    die("Connection error: " . mysqli_connect_error());
}

?>