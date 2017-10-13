<?php
include 'connection.php';
$j=$_REQUEST['jtpe'];//text field name
$p=$_REQUEST['place'];
$s=$_REQUEST['sd'];
$de=$_REQUEST['details'];
$da=$_REQUEST['days'];
$sql="INSERT INTO `requestjob`(`jbtype`, `place`, `jdate`, `jdetail`, `jdays`, `requeststatus`) VALUES ('$j','$p','$s','$de','$da',0)";   //query on data base(copy) symbol tild``//database field name
$result=mysqli_query($con,$sql) or die("DB Error");     //print on database

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
<tr><td><td><td><td><td><td><td><td><td><td ><td><td><td><td><a href="index.php"><img src="h4.png"></a></td></td></td></td>
</td></td></td></td></td></td></td></td></td></td><td><h2 align="center">PERSONAL DETAILS</h2></td>
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
  <form action="#" name="myform" id="myform" method="get" enctype="multipart/form-data">
     <b><label for="job">Job Type</label><b>
    <input type="text" id="jtpe" name="jtpe">
	
	<b><label for="sd">Starting Date</label><b>
    <input type="date" id="sd" name="sd">
	<b><label for="days">Number of days</label><b>
    <input type="number" id="days" name="days">
	
	<b><label for="job">Place</label></b>
    <input type="text" id="place" name="place">
	

   <b> <label for="details">Details</label></b>
    <textarea name="details" id="details" rows="4" cols="20"></textarea>

  
    <input type="submit" name="submit" value="Request">
  </form>
</div>

</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
