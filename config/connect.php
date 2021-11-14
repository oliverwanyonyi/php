<?php
// connect
$conn = mysqli_connect('localhost','username','password','dbname');
// check connection
if(!$conn){
    echo 'an error occured ' . mysqli_connect_error();
}

?>
