<?php
$n=$_POST['email'];
$c=$_POST['password'];
$con=mysqli_connect("localhost","eiea15","","eiea15");
$sql="INSERT INTO signup (EMAIL,PASSWORD) values('$n','$c')";
$r=mysqli_query($con,$sql); 
if($r)
{
    echo" signup successfully";
}
else{
    echo" signup not successfully"; 
}
?>

