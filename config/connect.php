<?php

$db = new mysqli("localhost","root","","tap");

if($db->connect_error){
die("Error Occured".$db->connect_error);
}else{
    //echo "Connection Established";
}










// $db = new mysqli("localhost","techctwn_TA","Emerald2240","techctwn_tapq");

// if($db->connect_error){
// die("Error Occured".$db->connect_error);
// }else{
//     //echo "Connection Established";
// }

?>