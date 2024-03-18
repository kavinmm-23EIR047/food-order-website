
<?php
$n=$_POST['name'];
$c=$_POST['email'];
$o=$_POST['phone'];
if(preg_match("/^([0-9]{10})$/",$o));
$a=$_POST['address'];
$p=$_POST['dishes'];
$s=$_POST['payment'];
$con=mysqli_connect("localhost","eiea15","","eiea15");
$sql="INSERT INTO register (NAME,EMAIL,PHONE,ADDRESS,DISHES,PAYMENT) values('$n','$c','$o','$a','$p','$s')";
$r=mysqli_query($con,$sql); 
if($r)
{
    echo" order successfully";
}
else{
    echo" order not successfully"; 
}
?>