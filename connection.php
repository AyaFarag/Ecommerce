<?php 
$conn = mysqli_connect("localhost","root","","progallary");

if($conn)
{
    echo "Database connected";
}
else 
{
    echo "connected err";
}

?>