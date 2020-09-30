<?php 
session_start(); 
include_once "connection.php";
?>
<div style="margin-top:50px; margin-bottom:100px;color:#3366cc; text-align:center; font-size:larger;">
<form method="post" action="active_registration.php">
Hello 
<?php 
echo $_SESSION['nm'];
?>

<br> Your Verification Code is Send To <br> Mobile No. :
<strong><font color="#990000">
<?php echo $_SESSION['mobile'];?>
</font></strong>
<br />
<?php 
if($_SESSION['error']!="")
{
?>
<br /><font color="red">
<?php
echo $_SESSION['error'];
?>
</font><br>
<?php
}  ?>

<input type="text" maxlength="4" minlength="4" name="vc" style="text-align:center; font-size:24px;"><br /><br />
<input type="submit" name="register" value="Verify" class="button1">
</form>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

</div>
<?php $_SESSION['nm'];
  $_SESSION['emailid'];
  $_SESSION['id'];
  $_SESSION['mobile'];
?>
<style>
.button1 {
       border: none;
     padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius:15px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
  background-color:#009933; 
    color:white;   
}
html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
</style>