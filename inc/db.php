<?php
$conn = mysqli_connect('localhost','root','root','PHP-JS-MySql-Project');
if(!$conn){
    echo 'Error: ' .mysqli_connect_error();
}
?>