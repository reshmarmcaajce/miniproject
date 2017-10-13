<?php
include_once "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<style>

body{
	background-color:;
	background-image: ;
}
.st{
	background-color:#212168;
	width:200px;
	font-size:19px;
	color:white;
	}
.st2{
	text-align:center;
	color:#101153;
	background-color:#9A9090;
	width:166px;
	height:17px;
	font-size:20px;
	padding:6px;
	background:#7B6868;
	background:-webkit-linear-gradient(left,#7B6868,#F7F2F2);
	}
select{
	width:170px;
}	
.main{
width:100%;
height:70px;
color:#4CAF50;
background-color:#111 ;
font-size:45px;
font-family:Monotype Corsiva
}
.clogin{
	background:#1D0E9A;
	background:-webkit-linear-gradient(BOTTOM,#1D0,#BAEFC3);
	width:300px;
	height:280px;
	position:relative;
	left:220px;
	top:30px;
	border:2px solid;
	border-radius:14px;
}
.login{
	height:300px;
	
}

.pics{
	width:1050px;
	
}

div.pic img{
	height:130px;
	width:210px;
	border:2px solid #1BB814;
	border-radius:8px;
	position:relative;
	left:5px;
}
div.pic img1{
	height:130px;
	width:210px;
	border:2px solid #1BB814;
	border-radius:8px;
	position:relative;
	right:5px;
}

//drop down menu
.nav{
	position:relative;
	bottom:200px;
}

ul{
        padding: 0;
        list-style: none;
        background-color:#333;
		
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        
.
    }
    ul li a{
        display: block;
		text-align: center;
        padding: 14px 16px;
        color: white;
        text-decoration: none;
    }
    ul li a:hover:not(.active){
        background-color:#111;
    }
	.active {
    background-color: #4CAF50;
}
    ul li ul.dropdown{
        min-width: 70px; /* Set width of the dropdown */
        background: #333;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
ul.dropdown li a:hover{
        background-color:#111;
}

.dropbtn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.dropbtn span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.dropbtn:hover span {
  padding-right: 25px;
}
.dropbtn:hover span:after {
  opacity: 1;
  right: 0;
}




</style>
</head>

<body>
<div class="main">Exclusive Car Rentals</div>
 <div class="nav">
  <ul>
  <li><a href="index.php">Home</a></li>
   <li><a href="customerregstn.php">Registration</a></li>
   <li><a href="login.php">Login</a></li>
   <li><a href="contact.php">Contact</a></li>
   </ul>
</div>

<table>
			<tr>
				<td class="side" width="20%" style="vertical-align:top;"  >
					<table class="sidebara">
							<tr>
                            	<td><div class="pic">
                        	        <img src="c5.jpg" alt="pic" />
                               </div></td>
                             </tr>
                             <tr>
                             	<td>  
                    	<div class="pic">
                        	<img src="car2.jpg" alt="pic" />
                         </div>
                    </td> 
                    </tr>
                    <tr>
                    	<td>  
                    	<div class="pic">
                        	<img src="c6.jpg" alt="pic" />
                         </div>
                    </td>
                    </tr>
					<tr>
                    	<td>  
                    	<div class="pic">
                        	<img src="wallpaper.jpg" alt="pic" />
                         </div>
                    </td>
                    </tr>
					
					</table>
				</td>
				
				<td class="main" width="60%" style="vertical-align:top;" >
					<div>
					   <div alt="a" style="max-width:500px;position:relative;top:5px;">
                                 <img class="mySlides" src="c5.jpg" alt="d" style="width:920px;height:350px;">
 								 <img class="mySlides" src="car2.jpg" alt="b" style="width:920px;height:350px;">
 								 <img class="mySlides" src="c13.jpg" alt="c" style="width:920px;height:350px;">
 								 <img class="mySlides" src="c6.jpg" alt="d" style="width:920px;height:350px;">
                                 <img class="mySlides" src="wallpaper.jpg" alt="d" style="width:920px;height:350px;">
								 
								</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
</div>
					<div class="mainnews">
						 <p><h3>Exclusive Car Rentals is one of the best car rental aggregators on the web to find cheap online car rentals.Exclisive Car 
						 Rentals allows users to compare rates from virtually every car rental company under the sun.ExclusiveCarRentals.com is the biggest
						 car rentals aggregator site that makes comparing car rental rates really easy.You just need to select when and where you want to 
						 pick up and drop off the cars,CarRntals does the rest.It searches offers from different vendors and displays a list of available 
						 cars sorted based on thedaily a list  of available cars sorted based on the daily rental rate startong based on the daily rental
						 rate startong from the cheapest.These car vendors include major car rental companies like Avis,Hertz,Sixt,National,Alarmo and other
						 smaller firms </h3></p>
					</div>
				</td>
				<td class="noti" width="20%" style="vertical-align:top;">
					<div class="a" style="border-radius:13px;position:relative;top:50px;" >NOTIFICATIONS</div>
					<div style="height:320px;border:2px solid;background:#1D0E9A;
	background:-webkit-linear-gradient(right,#1D0,#F7F2F2);;border-radius:25px;position:relative;top:90px;"><marquee direction="up"> WELCOME
					<br/>
					<br/>
					Many Offers are waiting for you
					<br/>
					<br/>
					40% Offers 
					<br/>
					<br/>
					Onam Offers are starting on 25th August
				</td>
			</tr>
			
				</td>
		</table>

<footer><div style="color:white;background-color:#060001;height:30px;"><i style="position:relative;top:8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exclusive car rentals...All rights Reserved</i><i style="position:relative;top:10px;left:420px;">Powered by Exc  
 <a href="#main">Top</a></i></div></footer>   
</body>
</html>
