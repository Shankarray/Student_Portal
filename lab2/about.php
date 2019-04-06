<html>
<head>
	<title>About Us</title>

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
	background-image:url('img/contact.jpg');	
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}


.c1{
	height:20%;
	width:100%;
	


}

.c2{
	height:50%;
	width:100%;
	


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

<div class="c1"><div style="font-size:40px;font-weight:bold;color:white;padding-left:530px;padding-top:5px;">ABOUT US</div></div>

<div class="c2">
<p><font size="4.5" color="white">We are a small group of entrepreneurs who dream big and intend to change the way that administrative software is sold and implemented in schools and districts today. For years we have watched large commercial education software companies continue to provide poor software that is proprietary and horribly expensive to a market that has little budget and few choices. We have been witness to botched and failed implementations that waste precious education budget dollars that should be going to the classroom and student instruction. And we have decided to change all of that starting right now. How? By providing quality alternatives to commercial software that are economical, easy to use and completely open. We are giving our clients freedom and control over their software solutions.
</p>
<p>We have big dreams, a lot of passion about what we do and the personal willpower to get it done. We aren't working for venture capitalists or angel investors. We are working for the good of education and more specifically, we are working for you, the individual educator. We intend to change the business model of administrative education software and force the large commercial companies to change with us. And in doing so, education wins and most importantly, students win and that keeps us here day in and day out working for you.</font></p>

</div>


</div>
<?php include('footer.php');?>


</body>
</html>




