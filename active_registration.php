<?php
session_start();
include_once "connection.php";
$vc=stripslashes(trim($_POST['vc']));
$id=$_SESSION['id'];
$email=$_SESSION['emailid'];
$mobile=$_SESSION['mobile'];
$nm=$_SESSION['nm'];

$search="select * from userinfo where mobile='$mobile' and otp='$vc'";
$add_query=mysqli_query($connect,$search)  or die(mysqli_error($connect));
$count=mysqli_num_rows($add_query);
if ($count!=1) 
{
$_SESSION['error']="Please Enter Valid OTP";
//die('Can not Search: ' . mysqli_error($connect));
header("location: verifyotp.php");
}
else
{
$search1="update userinfo set otp='No',logininfo=1 where mobile='$mobile'";
$add_query1=mysqli_query($connect,$search1)  or die(mysqli_error($connect));
$_SESSION['k']=0;
header("location: index1.php");
}

?>

