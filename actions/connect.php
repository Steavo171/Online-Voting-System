<?php

$conn= mysqli_connect('localhost','root','','votingsystem');
if(!$conn){
    echo "Connection failed";
}else{
    echo "Connection Succesful";
}

?>