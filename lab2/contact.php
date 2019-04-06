<html>
<head>
	<title>Contact us</title>

<style>
.header{
	width:100%;
	height:21%;
	background-color:rgb(155, 51, 196);

}

.dp{
	  width:5.8%;
        height:30%;
	float:left;
	background-color:rgb(155, 51, 196);
	margin-top:8px;
  	cursor: pointer;

}


.dropdown {
  position: relative;
  display: inline-block;
  float:left;
}


.dropdown-content {
  display: none;
  position: absolute;
   padding: 12px 16px;
  background-color: pink;
  min-width: 160px;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(96, 27, 66)}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

	

.logo    {
        width:8%;
        height:63%;
	float:left;
	background-color:rgb(155, 51, 196);
	margin-top:8px;
	padding:10px 0px 0px 200px;
       }       


.heading    {
        width:53%;
        height:80%;
        float:left;
	background-color:rgb(155, 51, 196);
	padding-top:18px;
	padding-left:8px;
       }       






.navbar {
  width:100%;
	height:7%;
  overflow: hidden;
  background-color:rgb(155, 51, 196);
box-shadow:0px 9px 0px rgb(145, 2, 2);
}

.navbar a {
  float: left;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 5px 5px ;
  margin-left:190px;
  margin-top:8px;
  text-decoration: none;
}

.d11 {
  float: left;
  overflow: hidden;
}

.d11 .dbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
    padding: 5px 5px;
margin-top:8px;
   margin-left:150px;
  background-color: inherit;
  font-family: inherit;
}

.navbar a:hover, .d11:hover .dbtn {
  background-color: red;
}

.d11-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.d11-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.d11-content a:hover {
  background-color: #ddd;
}

.d11:hover .d11-content {
  display: block;
}









.content{
	margin-top:5px;
	width:100%;
	height:100%;
	background-image:url('img/contact1.jpg');	
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}



.contact{
	height:30%;
	width:100%;
	float:left;


}

.contact1{
	height:30%;
	width:22%;
	float:left;

}

.contact2{
	height:30%;
	width:24%;
	float:left;

}

.contact3{
	height:30%;
	width:40%;
	float:left;

}




</style>	

<body>

<div class="header">


<div class="dropdown">
  <button class="dP"><img src=img/drop1.jpg></button>
  <div class="dropdown-content">
  <a href="main.php">Home</a>
  <a href="about.php">About Us</a>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  <a href="contact.php">Contact Us</a>  
  </div>
</div>

<div class="logo"><img src=img/student.png>
</div>


<div class="heading">


<div style="font-size:30px;font-weight:bold;font-family:'Helvetica Neue'; color:white;">STUDENT INFORMATION CENTER</div>	
<div style="font-size:24px;font-weight:bold;font-family:'Helvetica Neue'; color:white;letter-spacing:2px;word-spacing:7px;padding-top:1px;">छात्र जानकारी केंद्र</div>
<div style="font-size:16px;font-family:'Helvetica Neue';color:white;padding-top:2px;">(An Centre of National Importance under Government of India, Ministry of Human Resource Development)</div>
</div>


</div>


<div class="navbar">
  <a href="main.php">Home</a>
  <a href="about.php">About Us</a>
  <div class="d11">
    <button class="dbtn"><b>Login</b></button>
    <div class="d11-content">
      <a href="admin/admin_login.php">Admin Login</a>
      <a href="login.php">Student Login</a>
    </div>
  </div>
   <a href="register.php"><b>Register</b></a>
  <a href="contact.php">Contact Us</a>
</div>


<div class="content">

<div class="contact"><div style="font-size:40px;font-weight:bold;color:black;padding-left:610px;padding-top:5px;">CONTACT US</div></div>

<div class="contact1">
<div style="font-size:25px;font-weight:bold;color:green;padding-top:350px;padding-left:40px;">Mail us at:</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:40px;">shankarray@gmail.com</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:40px;">samriddhigupt@yahoo.com</div>
</div>


<div class="contact2">
<div style="font-size:25px;font-weight:bold;color:green;padding-top:350px;padding-left:200px;">Call us:</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:200px;">9685742546</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:200px;">6485321789</div>
</div>


<div class="contact3">
<div style="font-size:25px;font-weight:bold;color:green;padding-top:350px;padding-left:300px;">Write to us at:</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:300px;">samriddhi@yo</div>
<div style="font-size:20px;color:green;padding-top:10px;padding-left:300px;">shankar@yo</div>
</div>





</div>
<?php include('footer.php');?>



</body>
</html>






















