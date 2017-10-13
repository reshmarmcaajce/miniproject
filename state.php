<?php
include 'connection.php';
if(isset($_REQUEST['submit'])) //check on submit time
{
$n=$_REQUEST['state'];//text field name
$o=$_REQUEST['district'];
$p=$_REQUEST['city'];

$sql="INSERT INTO `registration`(`sname`, `dname`, `panchayath_name`) VALUES ('$n','$o','$p')";
//$result=mysqli_query($con,$sql) //or die("DB Error");print on database
//$sql1="INSERT INTO `login`(`username`, `password`) VALUES ('$g','$h')";
if (mysqli_query($con,$sql) > 0) {
//if (mysqli_query($con,$sql1) > 0) {
		echo "<script>alert('Success');</script>";
}
//}
else
{
	echo "<script>alert('Unsuccessfull');</script>";
}
//$result1=mysqli_query($con,$sql1) //or die("DB Error");print on database
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
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
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
h1{
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
<td><h1 align="center">STATE DETAILS</h1></td>
<td>
<td>
<td>
<td>
<td>
<a href="appl.php">
<img src="bac.jpg">
</a>
</td>
</td>
</td>
</td>
</td>
</tr>
</table>




<div>
  <form action="#" name="myform" id="myform" method="get"
    
    <b><label for="state">State</label></b>
    <select id="state" name="state" onchange="getId(this.value);">
      <option value="select">Select</option>
      <?php
	  $query = "SELECT * FROM state";
	  $results = mysqli_query($con,$query);
	  while($result=mysqli_fetch_array($results))
	  {
		  ?>
		 <option value="<?php echo $result["sid"];?>">
		 <?php echo $result["sname"];?></option> 
<?php
	  }
?>	  
    </select>
	<b><label for="district">District</label></b>
    <select id="district" name="district" onchange="getIdP(this.value);">
      <option value="distict">District</option>
          </select>
	<b><label for="city">Panchayath</label></b>
    <select id="city" name="city">
	 <option value="city">Panchayath</option>
      
    </select>
	
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<script src="jss/jquery.js"></script>
<script>
function getId(val){
	$.ajax({
		type:"POST",
		url:"get.php",
		data:"sid="+val,
		success:function(data){
			$("#district").html(data);
		}
	});
}
function getIdP(val){
	$.ajax({
		type:"POST",
		url:"getpanch.php",
		data:"did="+val,
		success:function(data){
			$("#city").html(data);
		}
	});
}
</script>
</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
