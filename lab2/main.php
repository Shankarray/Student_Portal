<html>
<head>
	<title>Student Information</title>

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




.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}




.content{
	margin-top:5px;
	width:100%;
	height:100%;
  background-color: #f9f8fd;
	
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}

.a1{
	width:250px;
	height:400px;
	background-color:white;
	margin:30px 10px 18px 180px;
	float:left;
	box-shadow:5px 5px 5px black;

}

.a1 p
{
	width:220px;
	height:30px;
	margin:7px;
	font-size:16px;
	font-weight:bold;
	font-family:'Times New Roman';
	background-color:rgb(27, 170, 170);
	border-radius:5px;padding:10px;
	float:left;
}
.a1 ul li a{
	text-decoration:none;
	color:black;
	font-size:18px;

}



.a2{
	width:790px;
	height:400px;
	background-color:tomato;
	margin-top:30px;
	float:left;
}

.f2{
	width:100%;
	height:60px;
	background-color:#333;
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

<div class="a1">
 		<p>GENERAL NOTICES</p><hr color=#ddd>
 		<marquee direction=up height=300px width=200px scrollamount=3 onmouseover=this.stop() onmouseout=this.start()>
 			<ul>
				<li><a href="">Short Listed Candidates for GD and PI for Sports 2019<img src=img/new.gif></a></li>
				<li><a href=""> Admission</a></li>
				<li><a href="">Transfer<img src=img/new.gif></a></li>
				<li><a href="">Celebration of National Science Day 2019</a></li>
				<li><a href="">Web Develop</a></li>
				<li><a href="">Web Design<img src=img/new.gif></a></li>
				<li><a href="">Mobile<img src=img/new.gif></a></li>
				<li><a href="">Whatsapp</a></li>
				<li><a href="">Result<img src=img/new.gif></a></li>
				<li><a href="">Admin's Notice</a></li>
				<li><a href="">Student's Notice<img src=img/new.gif></a></li>
				<li><a href="">Hostel Notice</a></li>
				<li><a href="">Selection list for Admission to PhD Programme, 2019-20<img src=img/new.gif></a></li>
				<li><a href="">News</a></li>
				<li><a href="">Wheather<img src=img/new.gif></a></li>
				<li><a href="">Trains</a></li>

	              </ul>	
</marquee>
<hr color=#ddd>
</div>
 
<div class="a2">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/f11.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/f22.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/registration1.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

	
</div>


</div>


<div class="f2">
<div style="padding:10px 50px 10px 450px; margin-left: 150px;"><font color=white size=2 face=sans-serif><b><u>By: Samriddhi-16IT8089 and Shankar-16IT8076</u></div>
<div style="padding:0px 0px 0px 500px; margin-left: 150px;">Last Update:- 4thApril  February 2019</b></font></div>
</div>


</body>
</html>