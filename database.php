<?php 

// connecting to mysql database
//mysql connect is deprecated/less secure
$con = mysqli_connect("localhost","root","","shoutit");

// testing connection

if(mysqli_connect_errno()){
    echo "Failed to Connect".mysqli_connect_error();
}