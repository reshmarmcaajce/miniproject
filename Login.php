<!DOCTYPE html>
<html lang="en">
    <?php
        include './connection.php';
        session_start();
    ?>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    
</head>	
<body>
    
    <!-- CONTAINER -->
    <div class="gl_login_container">
        <div class="gl_login_image_container">
            <center>
                <img src="images/login_image.png" alt="loginpic" class="gl_login_pic" id="gl_login_pic">
            </center>
        </div>
        <div class="gl_login_content_container">
                    <form id="frmLogin" method="POST" action="login.php" class="frmLogin" name="frmLogin">
                        <input type="hidden" id="hdaim" name="hdaim" value="one" />
                        <table class="gl_login_input_table" align="center" >
                            <tr>
                                <td>
                                    <input type="text" name="llid" id="llid"  style="width:100%;padding:20px 20px;" required placeholder="Login Id" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="lpwd" id="lpwd" style="width:100%;padding:20px 20px;" required placeholder="Password"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="forgotpassword.php">Forgot Password </a></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="LOGIN" name="gl_login_button" class="gl_login_button" id="gl_login_button" onclick="" />
                                </td>
                            </tr>

                            <tr></tr>
                            <tr></tr>

                        </table>
                    </form>
            </div>
    </div>
     
    
        <?php
            if(isset($_POST["gl_login_button"])){
                $u_id= htmlspecialchars($_POST['llid']);
                $p=htmlspecialchars($_POST['lpwd']);
                
                
                $sql3=mysqli_query($con,"SELECT  * FROM `login` where username='$u_id' and password='$p' ");
                if($row= mysqli_fetch_array($sql3)){
                    $_SESSION['u_id']=$u_id;
                    //$_SESSION['utype']=$row['utype'];
                    //$sql4=mysqli_query($con,"SELECT  * FROM `user` where uname=$uname");
                    //$row1= mysqli_fetch_array($sql4);
                    //if($row1['status']==2){
                        //echo "<script> alert('Waiting for Admin Approval')</script>";
                    //}
                    //else{
        ?>
                        <script>
				window.location="userlogin.php";
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