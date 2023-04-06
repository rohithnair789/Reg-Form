<?php

//Connection Establishing with necesary data
$con = mysqli_connect('localhost','ROHITH','','training');

//getting the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phoneNumber = $_POST['phoneNumber'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];

//insert into table
$sql = "INSERT INTO 'details'('fname','sname','email','gender','dob','phno','add1','add2') VALUES ('$firstName','$lastname','$email','$gender','$dob','$phoneNumber','$add1','$add2')";

//insert into database
$rs= mysqli_query($con,$sql);
if($rs)
{
echo"Contact records inserted";
}

?>