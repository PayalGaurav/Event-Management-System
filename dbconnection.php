<?php

$host="localhost";
$user="root";
$password="";
$dbname="Event_Management";
$link=@mysqli_connect($host,$user,$password,$dbname);

//echo mysqli_connect_errno();
if(mysqli_connect_errno())
{
    echo "Connection failed : ".mysqli_connect_error();
    exit();
}

//echo "<br>Connected with database server successfully";

?>