<?php
include 'connection.php';
 session_start();
    $uid=$_SESSION['uid'];
	//echo $uid;





?>
<!DOCTYPE html>
<html>
<style>
input[type=text],select {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date] {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=file],radio {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: #f8f8f8;
}

table {
    
    background-color: #f2f2f2;
    padding: 20px;
	
	border-color:grey
	
}
td{
	width:550px;
}

textarea {
    width: 100%;
    height: 70px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
h2{
	color:green;
}

</style>
<body>
  <form action="#" name="myform" id="myform" method="post" enctype="multipart/form-data">

<table border="0" style="height:100px;width:100%;">
<tr>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td>
<td >
<td>
<td>
<td>
<td>  
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
<td><h2 align="center">PERSONAL DETAILS</h2></td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<a href="userhome.php">
<img src="bac.jpg">
</a>
</td></td></td></td></td></td></td></td></td></td></td></td></td></td></td>
</td></td></td></td></td></td></td></td></td></td></td></td></td></td></td>

</td>
</td>
</td>
</td>
</tr>
</table>
<div>
  <table border="1" style="width:100%";>
  <tr>
  <td style="width:50px";> Name</td>
<td>Address</td>
<td>DateOfBirth</td>
<td>Gender</td>
<td>Category</td>
<td>Phone</td>
<td>Adhar</td>
<td>State</td>
<td>District</td>
<td>Panchayath</td>
<td>AccountNumber</td>
<td>IFSC</td>
</tr>  
 <?php 
  $result ="SELECT  `name`, `address`, `dob`, `gender`, `categor`, `phone`, `adhar`, `sname`, `dname`, `panchayath_name`, `account`, `ifsc` FROM `registration`";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$a=$row3['name'];//text field name
$b=$row3['address'];
$c=$row3['dob'];
$d=$row3['gender'];
$e=$row3['categor'];
$f=$row3['phone'];
//$g=$row3['email'];
//$h=$row3['password'];
$i=$row3['adhar'];//text field name
//$m=$row3['photo'];
$n=$row3['sname'];//text field name
$o=$row3['dname'];
$p=$row3['panchayath_name'];
$r=$row3['account'];
$s=$row3['ifsc'];	

$result2="SELECT * FROM state where sid='$n'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$state=$row4['sname'];

	
	
}
$result5="SELECT * FROM district where did='$o'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$district=$row5['dname'];

}
$result7="SELECT * FROM panchayath where panch_id='$p'";
$result8=mysqli_query($con,$result7);
while($row6 = mysqli_fetch_array($result8))
{
	$panchayath=$row6['panchayath_name'];

}
?>

	<tr>
	<td><input type="text" id="name" name="name" value='<?php echo $a ?> ' readonly></td>
    
    <td><input type="text" name="address" id="address"  value='<?php echo $b; ?> 'readonly></td>
    <td><input type="text" id="dob" name="dob" value='<?php echo $c ?> 'readonly></td>
   <td> <input type="text" id="gender" name="gender" value='<?php echo $d ?> 'readonly></td>
	
    <td><input type="text" id="category" name="category" value='<?php echo $e ?> 'readonly></td>
   <td> <input type="text" id="phone" name="phone" value='<?php echo $f ?> 'readonly></td>
	
   <td> <input type="text" id="ano" name="adhar" value='<?php echo $i ?> 'readonly></td>
        <td><input type="text" id="state" name="state" value='<?php echo $state ?> 'readonly></td>

    
    <td><input type="text" id="district" name="district" value='<?php echo $district ?> 'readonly></td>
               
      <td> <input type="text" id="city" name="city" value='<?php echo $panchayath ?> 'readonly></td>

      
   
   <td> <input type="text" id="ano" name="ano" value='<?php echo $r ?> 'readonly></td>

   <td> <input type="text" id="ifsc" name="ifsc" value='<?php echo $s ?> 'readonly></td>
     
   <td> <input type="text" id="mail" name="mail" value='<?php echo $g ?> 'readonly></td></tr>
   
   
   
   <?php
}
   ?>
	  
    <!--<input type="submit" name="submit" value="Submit">-->
	</table>   

  </form>


  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
