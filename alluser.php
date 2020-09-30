<?php 
session_start();
    $user=$_SESSION['nm'];
if ($user=="Admin") {
?>

<?php
  @ob_start();
include_once "connection.php";

 // Starting Session
$search="select * from userinfo";
$add_query=mysqli_query($connect,$search);

$sql="SELECT count(id) As total from userinfo";
$result1=mysqli_query($connect,$sql);
$values=mysqli_fetch_assoc($result1);
$num_rows=$values['total'];


$sql="SELECT value FROM userinfo where value>100";

if ($result=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  // printf("%d\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

?>

<!-- Heder For Admin Menu -->
<html>
<title>Admin (All User) - eForm</title>
<link rel="icon" type="image/png" href="images/favicon.ico">
<body>

<style>
.menu{
  font-size: 16px;
  background: #e8e8e8;
  color: #000000;
  text-align: center;
  padding: 12px;
  position: relative;
}
.menu a{
  text-decoration: none;
  font-size: 20px;
  font-weight: 900;
}
.menu a:hover{
  text-decoration: none;
  color: #0068FF;
}
.menu1{
  font-size: 20px;
  background: #ffffff;
  color: #000000;
  text-align: center;
  padding: 12px;
  position: relative;
  font-weight: bold;
}
.menu2{
font-size: 16px;
  background: #52CFEE;
  color: #000000;
  text-align: center;
  padding: 12px;
  position: relative; 
}
.input{
  padding: 10px 22px;
}
.wallet{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #FF9C0E;
}
.wallet:hover{
  background-color: #FF9C0E;
  color: white;
}
.active{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.active:hover{
  background-color: #4CAF50;
  color: white;
}

.inactive{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}
.inactive:hover{
  background-color: #f44336;
  color: white;
}
.export{
  background-color: #4CAF50; /* Green */
  border: none;
  color: #000;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.totaluser{
  background-color: #eaef40;
  border: none;
  color: #000;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.morethan100{
  background-color: #ff502e;
  border: none;
  color: #000;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.addproduct{
  background-color: #FAA519; 
  border: none;
  color: white;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 12px;
}
.email{
  background-color: #172BF0; 
  border: none;
  color: white;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 12px;
}
#myInput {
  background-image: url('css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 20%;
  border-radius: 20px;
  font-size: 18px;
  padding: 12px 20px 12px 40px;
  margin-bottom: 12px;
  margin-top: 12px;
}
</style>


<div>
 <tr class="menu">
  <td width="148" colspan="3">
   <table width="100%" class="menu">
    <tr align="center" class="menu">  
     <td><a href="alluser.php">All User</a></td>
     <td><a href="shopping/add-product.php">Add Product</a></td>
     <td><a href="email.php">Send Bulk Email</a></td>
     <td><a href="singleemail.php">Send Single Email</a></td>
     <td><a href="logout.php">Logout</a></td>
    </tr>
   </table>
  </td>
 </tr>
</div>

<!-- ---------Excel------------- -->
 <form method="post" action="export.php">  
     <input type="submit" name="export" class="export" value="Export to Excel" />
     <div class="totaluser">Total User : <b> <?php echo $num_rows; ?></div>
      <div class="morethan100">Active User : <b style="color: white;"> <?php echo $rowcount; ?> </div>
 </form>
 <!-- ------------Excel End------------ -->


<tr>  
<td colspan=3 align="center">
<?php
  if (!$add_query) 
  {
    die('Can not Search: ' . mysql_error());
  echo "Registration Or Name is not Valid";
  }
  else
  {
  ?>

  <table width="100%" align="center" bgcolor="#000000" style="color:#FFFFFF" id="myTable">
  <tr class="menu1">
  <td>S.No</td>
  <td>Name</td>
  <td>Email ID</td>
  <td>Password</td>
  <td>Mobile No.</td>
  <td style="width: 150px;">District</td>  
  <td>Wallet</td>
  <td>Registration Date</td>
  <td>Update Wallet</td>
  <td>Change Status</td>
  </tr>
  
  <?php 
  while($row = mysqli_fetch_array($add_query)) 
  {
  ?>


<form action="update.php" method="post" name="orde">

    <tr class="menu2">
         
   <td style="display: none"><input type="text" value="<?php echo $row['id']; ?>" name="uid" size="2" readonly></td>

   <td  style="display: none"><input class="input" value="<?php echo $row['name']; ?>" name="name" size="12" readonly></td>

   <td style="display: none"><input class="input" value="<?php echo $row['emailid']; ?>"name="email" readonly></td>

   <td style="background-color: #EAEF40;"><?php echo $row['id']; ?></td> 

   <td style="background-color: #78EE78;"><?php echo $row['name']; ?></td>

   <td style="background-color: #f0f0f0;"><?php echo $row['emailid']; ?></td>

   <td style="background-color: #EAEF40;"><?php echo $row['password'];; ?></td>

   <td style="background-color: #C09EE5;"><?php echo $row['mobile']; ?></td>

   <td style="background-color: #f0f0f0;"><?php echo $row['district']; ?></td> 

   <td style="background-color: #1DEED1;"><?php echo $row['value']; ?></td> 

   <td style="background-color: #fd5555;"><?php 
    $dateStr=strtotime($row['register_date']);
    echo date('d-m-Y', $dateStr);
    ?></td>


   <td><input class="input" type="text" value="" name="nvalue" size="5">

   <input type="submit" class="wallet" value="Refill"></td>

   <td style="background-color: #f0f0f0;">
<!--     <a class="active" href="active.php?uid=<?php echo $row['id']; ?>">Active</a>

     <a class="inactive" href="inactive.php?uid=<?php echo $row['id']; ?>">Inactive</a> -->

     <a class="active" href="delete.php?uid=<?php echo $row['id']; ?>">Delete</a>
   </td>

  </tr>
</form>
<?php
 }
?>
</table>
  
  <?php
}

?>
</td></tr>

</table>
</div>
</body>
</html>

<?php  
} 
else {
header("location:index.php");
}
?>