	

?> 
<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
	
$a=$_POST["mail"];
$b=$_POST["password"];
}
//INSERT INTO `tbl_login`(`uid`, `roleid`, `username`, `password`, `status`) VALUES
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['uid'];
	echo($row['uid']);
	?>
	
	<?php 
	if($a==$row['username']&&$b==$row['password']&&$row['roleid']==1)
	     {
		 $_SESSION['username']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['roletpe']='admin';
		 $_SESSION['uid']=$i;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE uid=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:adminhome.php');
		 }
	else if($a==$row['username']&&$b==$row['password']&&$row['roleid']==2)	 
		 {
		 $_SESSION['username']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['roletpe']='admin';
		 $_SESSION['uid']=$i; 
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE uid=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:stafflogin.php');
		 }
		 else if($a==$row['username']&&$b==$row['password']&&$row['uid']==3)	 
		 {
		 $_SESSION['username']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['roletpe']='admin';
		 $_SESSION['uid']=$i;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE log_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:memberlogin.php');
		 }


	
			 
	?>	
	
	<?php
}
echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
?>

?>
<html>
<head>
<style>
a:hover{
               background-color:orange;
}
input[type=text],radio {
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
input[type=button],radio {
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
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
label{
	color:green;
}
button
{
width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;	
}
</style>		
</head>
<body>
<table border="0" style="height:200px;width:100%;">
<tr>
<td ><img src="logo.jpg" alt="Mountain View"></td>
<td  style="background-image:url(1211.jpg);width:84%; background-repeat:repeat-x" <h1 align="center" style="font-size:45pt"><b><h1>MAHATHMA GANDHI NATIONAL RURAL EMPLOMENT GUARANTEE ACT-2005</h1></td>
<td  style="background-image:url(b1.jpg);height:150px;width:62%; background-repeat:repeat-x"></td>
</tr>
</table>
<div  class="" style="background-color:grey; color:#ffffff; padding:10px;">
<!-- <table style="background-color:grey;>  <tr><ul>-->
<a href="" style="font-size:20pt; color:#ffffff;"></a>
 <a href="index.php" style="font-size:20pt; color:#ffffff;">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <!--<a href="" style="font-size:20pt; color:#ffffff;">Mate Registration</a>-->
   </div>
<table border="1" style="height:440px;width:100%;">
<tr>
<td>
<table border="1" style="height:440px;width:100%;">
<tr>
<td style="background-color:grey;height:10%;">
<p style="font-family:lucida calligraphy;color:white;font-size:10pt;"><i>"The Mahathma Gandhi National Rural Emploment 
Guarantee Act aims at enhancing the livelihood securit of people in rural areas b guaranteeing hundred days of wage employment 
in a financial year to a rural household whose adult members volunteern to do unskilled manual work
The act was first proposed in 1991 by P.V. Narasimha Rao.Based on this pilot experience, NREGA was scoped up to covered all 
the districts of India from 1 April 2008.The statute is hailed by the government as "the largest and most ambitious social 
security and public works programme in the world".The World Bank termed it a "stellar example of rural development"</i></p>
</td>
</table>
<td class="main" width="80%" style="vertical-align:top;" >

<table border="1" style="height:100%;width:100%;">
<tr>
<td>
<div style="background-color:grey; color:#ffffff; padding:20px;margin-left:50px;margin-right:20px;margin-top:10px;">

<div>
  <form action="#" name="myform" id="myform" method="POST">
    <b> <label for="fname">Mail Id</label></b>
    <input type="text" id="mail" name="mail">

   	<b><label for="dob">Password</label></b>
    <input type="password" name="password" id="password">
	
		
     
    <input type="submit" name="submit" value="Login">
	<button> <a href="">Change Password</a></button>
  </form>
</div>

</div> 
</td>

</tr>
</table>


</td>
</td>
</tr>
</table>
<?php
            if(isset($_POST["submit"])){
                $u_id= htmlspecialchars($_POST['mail']);
                $p=htmlspecialchars($_POST['password']);
                echo $u_id;
				echo $p;
                
                $sql3=mysqli_query($con,"SELECT  * FROM `login` where username='$u_id' and password='$p' ");
                if($row= mysqli_fetch_array($sql3)){
                    $_SESSION['u_id']=$u_id;
					$_SESSION['role_type']=$row['role_type'];
					//echo $_SESSION['role_type'];
                    //$_SESSION['utype']=$row['utype'];
                    //$sql4=mysqli_query($con,"SELECT  * FROM `user` where uname=$uname");
                    //$row1= mysqli_fetch_array($sql4);
                    //if($row1['status']==2){
                        //echo "<script> alert('Waiting for Admin Approval')</script>";
                    //}
                    //else{
						if($_SESSION['role_type']==1){
					?>
							<script>
								window.location="adminhome.php";
							</script>
					<?php
						}
						else if($_SESSION['role_type']==2){
					?>
							<script>
								window.location="matehome.php";
							</script>
					<?php
						}
						else{
					?>		
							<script>
								window.location="userhome.php";
							</script>
							<?php
						}
					
        ?>
                        <script>
				window.location="userhome.php";
			</script>
        <?php
                //}
                }
                else{
                    echo "<script> alert('Invalid username/Password')</script>";
                }
                }
        ?>
    
</body>
</html>

