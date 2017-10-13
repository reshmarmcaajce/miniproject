<?php
include 'connection.php';
if(isset($_REQUEST['submit'])) //check on submit time
{
$a=$_REQUEST['name'];//text field name
$b=$_REQUEST['address'];
$c=$_REQUEST['dob'];
$d=$_REQUEST['gender'];
$e=$_REQUEST['category'];
$f=$_REQUEST['phone'];
$g=$_REQUEST['mail'];
$h=$_REQUEST['password'];
$sql="INSERT INTO `personal`(`name`, `address`, `dob`, `gender`, `categor`, `phone`) VALUES ('$a','$b','$c','$d','$e','$f')";
//$result=mysqli_query($con,$sql) //or die("DB Error");print on database
$sql1="INSERT INTO `login`(`username`, `password`) VALUES ('$g','$h')";
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
<script>
        function loginPwd(){
            var fpwd1=/^[a-z0-9]{4,25}$/;
                if(document.frmLogin.lpwd.value.search(fpwd1)==-1)
                 {
                      alert("OoppZz.. Wrong Password");
                      document.frmLogin.lpwd.focus();
                      
                      return false;
                }
        }
        
        function gName(){
            var gl_reg_name= document.gl_reg_form.gl_reg_name.value;
                if((gl_reg_name===null)||(gl_reg_name.length<5)){
                    
                    alert("Enter Full Name");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.gl_reg_form.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.gl_reg_form.gl_reg_name.focus();
                      
                      return false;
                    }
                if((gl_reg_name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
        }
        function gEmail(){
            var gl_reg_email=document.gl_reg_form.gl_reg_email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.gl_reg_form.gl_reg_email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
            var gl_reg_num=document.gl_reg_form.gl_reg_num.value;
                if(isNaN(gl_reg_num)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.gl_reg_form.gl_reg_num.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
        function gAdhar(){
            var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
        }
        function gAdmNo(){
            var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
        }
        function gPwd(){
            var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        
        
        function  addUser(){
                var gl_reg_name= document.gl_reg_form.gl_reg_name.value;
                if((gl_reg_name===null)||(gl_reg_name.length<5)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.gl_reg_form.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.gl_reg_form.gl_reg_name.focus();
                      document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                      return false;
                    }
                if((gl_reg_name.length>25)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var gl_reg_num=document.gl_reg_form.gl_reg_num.value;
                if(isNaN(gl_reg_num)){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                
                var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                
                var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                
                
                var gl_reg_email=document.gl_reg_form.gl_reg_email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.gl_reg_form.gl_reg_email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                
                var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
  
                
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{4,25}$/;
                if(document.gl_reg_form.gl_reg_pwd.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.gl_reg_form.gl_reg_pwd.focus();
                      
                      return false;
                }
            }
        </script>
</head>
<style>
input[type=text],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password],radio {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date] {
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
textarea {
    width: 100%;
    height: 80px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
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
<td><h1 align="center">PERSONAL DETAILS</h1></td>
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
    <b> <label for="fname">Name</label></b>
    <input type="text" id="name" name="name">

   <b> <label for="address">Address</label></b>
    <textarea name="address" id="address" rows="4" cols="20"></textarea>
	<b><label for="dob">Date Of Birth</label></b>
    <input type="date" name="dob" id="dob">
	<b><label for="gender">Gender</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="male" >Male
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="female">Female
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="gender" id="gender" value="others">Others
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	
	<b><label for="category">Category</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="general" >General
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="obc">OBC
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="sc">SC
	&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio" name="category" id="category" value="st">ST
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<b><label for="phone">Phone</label></b>
    <input type="number" id="phone" name="phone">
	<b><label for="mail">Mail Id</label></b>
    <input type="text" id="mail" name="mail">
	<b><label for="password">Password</label></b>
    <input type="password" id="password" name="password">
	
     
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_forms By www.freedomhunt.tk, Thu, 02 Jun 2016 12:17:52 GMT -->
</html>
