<?php
session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location: admin_login.php');
    }

?>

<title>AdminDashboard</title>
<header>
  <h1>
                Welcome to Admin Dashboard
                <h4>
            <a href="../main.php" style="float:left;margin-right:30px; color:#795548; font-size:20px;">Home</a>
            <a href="logout.php" style="float:right;margin-right:30px; color:#795548; font-size:20px;">Log Out</a>
        </h4>
            </h1>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="update_student.php">UPDATE</a>
  <a href="add_student.php">ADD</a>
  <a href="delete_student.php">DELETE</a>
  <a href="view_student.php">VIEW</a>
  <a href="request.php">REQUEST</a>
</div>

<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Click to choose your option</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>            

</header>
<div style="margin-left: 350px;">
<div class="container">
  <img src="img/update.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="update_student.php">UPDATE</a></div>
  </div></div>
</div>


<div class="container">
  <img src="img/add.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="add_student.php">ADD</a></div>
  </div>
</div>

<div class="container">
  <img src="img/delete.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="delete_student.php">DELETE</a></div>
  </div>
</div>

<div class="container">

  <img src="img/view.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="view_student.php">VIEW</a></div>
  </div>
</div>

<div class="container">

  <img src="img/accept.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><a href="request.php">ACCEPT</a></div>
  </div>
</div>
   

<style>
@import 'https://fonts.googleapis.com/css?family=Raleway';

html, body
{
    margin: 0px;
}

header, footer
{
    font-family: Raleway;
    margin: 0 auto;
    padding: 5em 3em;
    text-align: center;
    background: #81D86A ;
}

header h1
{
    color: white;
    font-size: 50px;
    font-weight: lighter;
    margin-bottom: 5px;
}

header span
{
    color: #FFF;
}

footer span
{
  color: #AAA;
}

div.container
{
    font-family: Raleway;
    margin: 0 auto;
    padding: 10em 3em;
    text-align: center;
}

div.container a
{
    color: #FFF;
    text-decoration: none;
    font: 20px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}

.red
{
    background: #f44336;
}

.purple
{
    background: #673ab7;
}

.indigo
{
    background: #3f51b5;
}

.blue
{
    background: #2196f3;
}

.cyan
{
    background: #00bcd4;
}

.teal
{
    background: #009688;
}

.green
{
    background: #4caf50;
}

.lightGreen
{
    background: #8bc34a;
}

.lime
{
    background: #c0ca33;
}

.yellow
{
    background: #fdd835;
}

.amber
{
    background: #ffc107;
}

.orange
{
    background: #ff9800
}

.deepOrange
{
    background: #ff5722;
}

.brown
{
    background: #795548;
}

.gray
{
    background: #9e9e9e;
}

/* Top and Bottom borders go out */
div.topBotomBordersOut a:before, div.topBotomBordersOut a:after
{
    position: absolute;
    left: 0px;
    width: 100%;
    height: 2px;
    background: #FFF;
    content: "";
    opacity: 0;
    transition: all 0.3s;
}

div.topBotomBordersOut a:before
{
    top: 0px;
    transform: translateY(10px);
}

div.topBotomBordersOut a:after
{
    bottom: 0px;
    transform: translateY(-10px);
}

div.topBotomBordersOut a:hover:before, div.topBotomBordersOut a:hover:after
{
    opacity: 1;
    transform: translateY(0px);
}



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 30px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}




.container {
  position: relative;
  width: 5%;
  height: 5%;
  float: left;
  padding: 0px 100px 60px 65px;
  margin-left: 30px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 90%;
  height: 30%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-weight: bold;
  font-size: 25px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}






@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>