<?php
$severname="localhost";
$username="root";
$password="";

$connect=mysqli_connect($severname,$username,$password);
if (!$connect) {
    die("Sorry can't connect".mysqli_connect_error());
}
else {
    echo"<br/> connect successfully";
}
$sql= "create database Feedback";
$result=mysqli_query($connect,$sql);
if($result)
{
    echo "the database created successfully <br/> ";
}
else
{
    echo "the database is not created successfully because of the error !".mysqli_error($connect);
}

?>