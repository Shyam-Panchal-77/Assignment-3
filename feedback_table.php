<?php 

$servername="localhost";
$username="root";
$password="";
$database="feedback";

//create the connection
$connect = mysqli_connect($servername,$username,$password,$database);

if(!$connect){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}
//create a table in db
//$sql="CREATE TABLE `Feedback` (`FName` VARCHAR(20) NOT NULL , `LName` VARCHAR(15) NOT NULL, `EMail id` VARCHAR(30) NOT NULL ,`feedback` text NOT NULL)" ;

$sql1="INSERT INTO feedback_db (LName,EMail,Feedback)values('Kumavat','dhruvi@gmail.com','I am working on mysql'),('Singhania','Singh@gmail.com','Excellent')";
$result=mysqli_query($connect,$sql1);

//check table creation success
if($result)
{
    echo "Its successfully";
}
else
{
    echo "not created successfully".mysqli_error($connect);
}
?>