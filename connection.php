<?php

    $conn = mysqli_connect("localhost","root","","web");
    if(!$conn){
        die("Failed to connect:".mysqli_connect_error());
    }