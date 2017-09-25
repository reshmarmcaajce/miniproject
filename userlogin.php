<?php
include 'connection.php';
  session_start();

    if(!isset($_SESSION['u_id'])){
      
  header("location:login.php");
   
 }
?>
<!DOCTYPE html>
<html>
<head><style>
div.first{
position:static;
background-color:black; 
color:#ffffff;
 padding:10px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:black;
}

li.dropdown {
    display: inline-block;
     font-size:20;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: crimson;
	font-size:20;
    padding: 12px 16px;
    text-decoration: none; display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
body{
           background-image:url(aaaa.jpg);
          background-size:100%;
	       background-repeat:no-repeat;
		   height:500px;
		   width:100%;
		   
		   }	

</style>


<!--<title>adminlogin</title>-->



</head>
<body style="background-color:#ffffff;">
<div  class="first" >
<a href="logout.php" style="font-size:15pt";>LOGOUT </div><!--</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php"style="font-size:15pt";>LOGIN</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="about.php"style="font-size:15pt";>ABOUT</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="contacts.php"style="font-size:15pt";>CONTACTS</a>

</div>
<br>

  <ul>

 
  <li class="dropdown">
    <a href="#" class="dropbtn" style="font-size:15pt";>REQUEST</a>
    <div class="dropdown-content">

	  <a href="userplan.php" style="font-size:15pt";>INSERT</a>
                  
    </div>
  </li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn" style="font-size:15pt";>VIEW</a>
    <div class="dropdown-content">
                     <a href="approveplan.php" style="font-size:15pt";>PLANS</a><br>  
	 
	  
    </div>
  </li>
 



<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="" href="index.php"style="font-size:15pt";>HOME</a></li>
<li><a class="" href="index.php" style="font-size:15pt";>LOGOUT</a></li>

</ul>
<br><br><br>
<marquee><img src="3.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp
<img src="10.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp
<img src="9.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp
<img src="duc.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp
<img src="u.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp
<img src="v.jpg" alt="Mountain View" style="width:500px;height:500px;">&nbsp&nbsp&nbsp

</marquee>-->


 </body>
</html>

