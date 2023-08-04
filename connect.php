<?php 

    $con = new mysqli('localhost', 'root', '', 'crudcode'); // root is user name

    if(!$con){
        die(mysqli_error($con));
    }

?>
