<?php

$db=mysqli_connect("localhost", "root", "", "project");

if(!$db){
    die("Connection not successful: ".mysqli_connect_error());
}

?>