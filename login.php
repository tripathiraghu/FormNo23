<?php
session_start();
include_once "connection.php";
 // Starting Session
date_default_timezone_set('America/Los_Angeles');
$vdt=date('j');
$m=date('m');
$y=date('Y');
$h=date('H');
$i=date('i');
$s=date('s');
$a=$vdt+31;
$b=$m+12;
$c=$y+503;
$h=$h+12;
$i=$i+60;
$s=$s+60;
$vc=$a+$b+$c+$h+$i+$s;

$error=''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
		//if (empty($_POST['emailid']) || empty($_POST['pass'])) 
		if (empty($_POST['mobile'])) 
		{
		 $error = "Mobile No is Invalid";

		}
		else
		{
								$number=stripslashes(trim($_POST['mobile']));
								$search= "update userinfo set otp='$vc' where mobile='$number'";
								echo $search;
								$add_query=mysqli_query($connect,$search);
								$search= "select * from userinfo where mobile='$number'";
								echo $search;
								$add_query=mysqli_query($connect,$search);
								//$numberOfRows = mysqli_num_rows($add_query);
							//	echo $numberOfRows;
									if (!$add_query) 
										{
  										echo "<script>
								alert('Please Enter Vaild Email ID and Password');
								window.location.href='index.php';
								</script>";
										}
								else
								{
							$row = mysqli_fetch_array($add_query);

	$username="bnnawal";
	$Password="nawal123";

	//Getting form data

	$sender='ONESHP';
//	$number=$_POST['mobile'];
	//$message=$_POST['message'];
	$priority='ndnd';
	$stype='normal';

	$bal="+56Rs";
   $message=urlencode("Your OTP For Login is:'".$vc."'");

  $var="user=".$username."&pass=".$Password."&sender=".$sender."&phone=".$number."&text=".$message."&priority=".$priority."&stype=".$stype."";


  	 	$curl=curl_init('http://bhashsms.com/api/sendmsg.php?'.$var);
   	 	curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
   	 	$response=curl_exec($curl);
   	 	curl_close($curl);
										
										
										
										$_SESSION['nm']=$row['name'];
										$_SESSION['emailid']=$row['emailid'];
										$_SESSION['mobile']=$row['mobile'];
										$_SESSION['id']=$row['id']; 
										$_SESSION['status']=$row['status'];
										$_SESSION['value']=$row['value']; 
										$_SESSION['error']="";
										header("location: verifyotp.php");
										
										}	
								}
}		

?>