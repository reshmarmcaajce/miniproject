<?php
include 'connection.php';
if(isset($_REQUEST['register'])) //check on submit time
{
$a=$_REQUEST['name'];//text field name
$b=$_REQUEST['address'];
$c=$_REQUEST['state'];
$d=$_REQUEST['dob'];
$e=$_REQUEST['doa'];
$f=$_REQUEST['gender'];
$g=$_REQUEST['category'];
$h=$_REQUEST['fhname'];
$i=$_REQUEST['district'];
$j=$_REQUEST['village'];
$k=$_REQUEST['adno'];
$l=$_REQUEST['rtno'];
$m=$_REQUEST['accno'];
$n=$_REQUEST['ifsc'];
$o=$_REQUEST['hno'];
//$p=$_REQUEST['photo'];
$q=$_REQUEST['phno'];
$r=$_REQUEST['mid'];
$s=$_REQUEST['password'];
$sql="INSERT INTO `jobcard`( `name`, `dob`, `sex`, `address`, `doa`, `ad_no`, `rt_no`, `ac_no`, `ifsc`, `h_no`, `category`, `village`, `district`, `state`, `guardian`, `phone`, `status`, `approve`) VALUES ('$a','$d','$f','$b','$e','$k','$l','$m','$n','$o','$g','$j','$i','$c','$h',$q,1,0)";   //query on data base(copy) symbol tild``//database field name
//echo $sql; //print data on browse
//$result=mysqli_query($con,$sql) //or die("DB Error");print on database
$sql1="INSERT INTO `login`( `username`, `password`) VALUES ('$r','$s')";
if (mysqli_query($con,$sql) > 0) {
if (mysqli_query($con,$sql1) > 0) {
		echo "<script>alert('Success');</script>";
}
}
else
{
	echo "<script>alert('Unsuccessfull');</script>";
}
//$result1=mysqli_query($con,$sql1) //or die("DB Error");print on database
}
?>
<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<style type="text/css">
.button {
    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    background-position: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 10px;
    <!--border: 2px solid #73AD21;-->
    padding: 15px;
    width: 100px;
    height: 30px; 
}
body{
    background-image: url("a10.jpg");
	<!--background-color: #7FFFD4;-->
    background-repeat: no-repeat;
    background-size:100%;
    }
.a
{
color:maroon;
}
td {
    padding: 6px;

}
</style>
</head>
<body>
<div  class="first" style="background-color:blue; color:#ffffff; padding:7px;">
<a href="home.php" style="font-size:13pt; color:#ffffff;">HOME</a>
</div>	
<form action="#" name="myform" id="myform" method="get">
<h3 style="text-align:center; color:maroon;">REGISTRATION FORM</h3>
<table align="center">
<tr>
<td class="a"><b>NAME</b></td>
<td><input type="text" name="name" id="name" placeholder="name" required></td>
</tr>
<tr>
<td class="a"><b>ADDRESS</b></td>
<td><textarea name="address" id="address" rows="4" cols="20"placeholder="address" required></textarea></td>
</tr>
<tr>
<td class="a"><b>STATE</b></td>

  <td>
                    <select required="" name="state" id="state">
                        <option value="0">select</option>
                        <option value="1">Andhra Pradesh</option>
                        <option value="2">Arunachal Pradesh</option>
                        <option value="3">Assam</option>
                        <option value="4">Bihar</option>
                        <option value="5">Chandigarh</option>
                        <option value="6">Chattisgarh</option>
                        <option value="7">Goa</option>
                        <option value="8">Gujarat</option>
						<option value="9">Haryana</option>
                        <option value="10">Himachal Pradesh</option>
                        <option value="11">Jammu and Kashmir</option>
                        <option value="12">Jharkhand</option>
                        <option value="13">Karnataka</option>
                        <option value="14">Kerala</option>
                        <option value="15">Madhya Paradesh</option>
                        <option value="16">Maharashtra</option>
						<option value="17">Manipur</option>
                        <option value="18">Meghalaya</option>
						<option value="19">West Bengal</option>
                        <option value="20">Mizoram</option>
                        <option value="21">Nagland</option>
                        <option value="22">Odisha</option>
                        <option value="23">Punjab</option>
                        <option value="24">Rajasthan</option>
                        <option value="25">Sikkim</option>
                        <option value="26">Tamil Nadu</option>
						<option value="27">Telangana</option>
                        <option value="28">Tripura</option>
                        <option value="29">Uttar Pradesh</option>
                        </select>
                </td> 
           </tr>
<tr>
<td class="a"><b>DATE OF BIRTH</b></td>
<td><input type="date" name="dob" id="dob" placeholder="dob" required></td>
</tr><tr>
<td class="a"><b>DATE OF APPLY</b></td>
<td><input type="date" name="doa" id="doa" placeholder="doa" required></td>
</tr>

<tr>
<td class="a"><b>GENDER</b></td>
<td><input type="radio" name="gender" id="gender" value="male" >Male<input type="radio" name="gender" id="gender" value="female">Female<input type="radio" name="gender" id="gender" value="other">Other</td>
</tr>
<tr>
<td class="a"><b>CATEGORY</b></td>
<td><input type="radio" name="category" id="category" value="general" >General<input type="radio" name="category" id="category" value="obc">OBC<input type="radio" name="category" id="category" value="sc">SC<input type="radio" name="category" id="category" value="st">ST</td>
</tr>
<tr>
<td class="a"><b>FATHER/HUSBAND'S NAME</b></td>
<td><input type="text" name="fhname" id="fhname" placeholder="fhname" required></td>
</tr>
<tr>
<td class="a"><b>DISTRICT</b></td>
 <td><input type="text" name="district" id="district" placeholder="fhname" required></td>
              
</tr>
<tr>
<td class="a"><b>VILLAGE</b></td>
<td><input type="text" name="village"placeholder="village" required></td>
</tr>
<tr>
<td class="a"><b>AADHAR NUMBER</b></td>
<td><input type="text" name="adno"placeholder="aadhar number" required></td>
</tr>
<tr>
<td  class="a"><b>RATION CARD NUMBER</b></td>
<td><input type="text" name="rtno"placeholder="rtno" required></td>
</tr>
<tr>
<td class="a"><b>ACCOUNT NUMBER</b></td>
<td><input type="text" name="accno"placeholder="account number" required></td>
</tr>
<tr>
<td class="a"><b>IFSC CODE</b></td>
<td><input type="text" name="ifsc"placeholder="ifsc code" required></td>
</tr>
<tr>
<td class="a"><b>HOUSE NUMBER</b></td>
<td><input type="text" name="hno"placeholder="house number" required></td>
</tr>
<tr>
<td class="a"><b>PHONE</b></td>
<td><input type="text" name="phno"placeholder="phone number" required></td>
</tr>
<tr>
<td  class="a"><b>MAIL ID</b></td>
<td><input type="text" name="mid"placeholder="mail id" required></td>
</tr>
<tr>
<td  class="a"><b>PASSWORD</b></td>
<td><input type="password" name="password"placeholder="password" required></td>
</tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="register" value="Register" class="button" ></td>
</tr>
</table>
</form>
</body>
</html>
