<?php

$db = new mysqli("localhost","root","","tap");

if($db->connect_error){
die("Error Occured".$db->connect_error);
}else{
    //echo "Connection Established";
}

?>