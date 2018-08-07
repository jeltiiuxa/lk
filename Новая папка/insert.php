<?php
$con= mysqli_connect('127.0.0.1', 'root', '12345');

if(!$con)
{
        echo 'not connected to server';
}


if(!mysqli_select_db($con, 'vz'))
{
    echo 'Database not selected';
}

$name=$_POST['username'];
$email=$_POST['email'];

$sql="INSERT INTO username (Name, email) VALUES ('$name', '$email') ";

if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
}
else {
    echo 'inserted';
}
 header("refresh:1; url=lk.php");

?>