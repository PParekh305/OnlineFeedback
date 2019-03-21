<?php
session_start();
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="students";
$dbport = 3306;
$conn= mysqli_connect('localhost', 'root', '', 'students',$dbport);
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>