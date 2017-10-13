<!DOCTYPE html>
<?php
	session_start();
	include './connection.php';

?>
<html>
<head>
<style>
a:hover{
               background-color:orange;
}
input[type=text],radio {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password],radio {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=button],radio {
    width: 100%;
    padding: 8px 20px;
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
    padding: 8px 20px;
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
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;	
}
</style>		
</head>
<body>
<table border="0" style="height:150px;width:100%;">
<tr>
<td ><img src="logo1.jpg" alt="Mountain View"></td>
<td  style="background-image:url(1.jpg);width:83%; background-repeat:repeat-x" <h1 align="center" style="font-size:45pt"><b><h1>MAHATHMA GANDHI NATIONAL RURAL EMPLOMENT GUARANTEE ACT-2005</h1></td>
<td  style="background-image:url(11.jpg);height:150px;width:62%; background-repeat:repeat-x"></td>
</tr>
</table>
<div  class="" style="background-color:grey; color:#ffffff; padding:5px;">
<!-- <table style="background-color:grey;>  <tr><ul>-->
<a href="" style="font-size:20pt; color:#ffffff;"></a>
 <a href="index.php" style="font-size:20pt; color:#ffffff;">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <!--<a href="" style="font-size:20pt; color:#ffffff;">Mate Registration</a>-->
   </div>
<table border="1" style="height:90px;width:100%;">
<tr>
<td>
<table border="1" style="height:90px;background-color:grey;width:100%;">
<tr>
<td style="background-color:grey;height:100%;">
<p style="font-family:lucida calligraphy;color:white;font-size:8pt;"><i>"The Mahathma Gandhi National Rural Emploment 
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
<div style="background-color:grey; color:#ffffff; padding:15px;margin-left:25px;margin-right:20px;margin-top:1px;">

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
                $email=$_POST['mail'];
                $p=$_POST['password'];
                echo $email;
				echo $p;
                
                $sql3=mysqli_query($con,"SELECT  * FROM `login` where username='$email' and password='$p' ");
                if($row= mysqli_fetch_array($sql3)){
					
					$result5="SELECT * FROM login where username='$email'";
					$result6=mysqli_query($con,$result5);
					while($row5 = mysqli_fetch_array($result6))
					{
						$uid=$row5['uid'];

					}
					$_SESSION['email']=$email;
                    $_SESSION['uid']=$uid;
					$_SESSION['roleid']=$row['roleid'];
					//echo $_SESSION['role_type'];
                    //$_SESSION['utype']=$row['utype'];
                    //$sql4=mysqli_query($con,"SELECT  * FROM `user` where uname=$uname");
                    //$row1= mysqli_fetch_array($sql4);
                    //if($row1['status']==2){
                        //echo "<script> alert('Waiting for Admin Approval')</script>";
                    //}
                    //else{
						if($_SESSION['roleid']==1){
					?>
							<script>
								window.location="adminhome.php";
							</script>
					<?php
						}
						else if($_SESSION['roleid']==2){
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
