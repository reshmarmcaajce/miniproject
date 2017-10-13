<?php
include 'connection.php';
session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }
if(isset($_REQUEST['submit'])) //check on submit time
{
$a=$_REQUEST['notification'];//text field name
$b=$_REQUEST['noti'];
if($a=='user')
{
	$status=1;
}
else 
{
	$status=2;
}

$sql="INSERT INTO `notification`(`notifiesto`, `notdescription`, `notstatus`) VALUES ('$a','$b',$status)";
$result=mysqli_query($con,$sql);
}
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	border-color:grey
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
<td><a href="index.php">
<img src="h4.png">
</a>
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
<td><h2 align="center">NOTIFICATION DETAILS</h2></td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td>
<a href="adminhome.php">
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
  <form action="#" name="myform" id="myform" method="get">
    <label for="country">Notification To</label>
    <select id="notification" name="notification">
	  <option value="select">Select</option>
      <option value="mate">Mate</option>
      <option value="user">User</option>
    </select>
	<b> <label for="address">Notification</label></b>
    <textarea name="noti" id="address" rows="5" cols="20"></textarea>
	    <input type="submit" name="submit" value="Submit">

     </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
