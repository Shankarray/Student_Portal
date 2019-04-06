<?php
 session_start();
  if(isset($_SESSION['uid']))
  {
    header('location:admin_dash.php');
  }
?>

<html>
<head>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/responsivegridsystem/grid.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700" rel="stylesheet">
  <title>Administrator Login</title>

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

h1{
    margin: 0;
    margin-bottom: 5%;
    padding-top: 30px;
    padding-left: 30px;
    color: #fff;
    font-size: 240%;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 1px;
    word-spacing: 4px;
    
    
}
.btn:link,
.btn:visited {
    display: inline-block;
    padding: 10px 30px;
    font-weight: 300;
    text-decoration: none; 
    border-radius: 200px;
    color: #fff;
    transition: background-color 0.2s,border 0.2s,color 0.2s;
}     
.btn-full:link,
.btn-full:visited  {
    background-color:#8e44ad;
    border: 1px solid #8e44ad;
    color: #fff;
    margin-right: 10px;
}
.btn-ghost:link,
.btn-ghost:visited {
    border: 1px solid #8e44ad;
    color: #fff;
}
.btn:hover,
.btn:active{
    background-color: #7a3a95
}
.btn-full:hover,
.btn-full:active {
    border: 1px solid #7a3a95
        color: #974ab8
}
.btn-ghost:hover,
.btn-ghost:active {
    border: 1px solid #7a3a95
    color: #fff;
}
.content{
  margin-top:5px;
  width:100%;
  height:100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.88),rgba(0, 0, 0, 0.25)),url(../Resources/css/work1.jpg);  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
#area3{
  border:1px solid black;
  padding:8px 10px;
  border-radius: 5px;
  margin-top: 10px;
  margin-left: 30px;

}
#realname{
  border:1px solid black;
  padding:8px 10px;
  border-radius: 5px;
  margin-top: 10px;
  margin-left: 30px;

}
#login{
  width:100px;
  height: 30px;
  border-radius: 5px;
  background-color:#8e44ad;
    border: 1px solid #8e44ad;
    color: #fff;
    transition: background-color 0.2s,border 0.2s,color 0.2s;
}
</style>  

<script type="text/javascript">

  function checkName(form)
  {
   var eobj=document.getElementById('realnameerror');
   var sRealName = form.uname.value;
   var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
   var error=false;
   eobj.innerHTML='';
   if (sRealName == '') {
    error='Username cannot be blank!';
    form.username.focus();
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
    }
   else if (sRealName.length < 4)
   {
    error="Username should be atleast 4 characters long";
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
     }
   else if (!oRE.test(sRealName))
   {
    error="Incorrect format.";
    eobj.style.color='red';
    eobj.style.fontSize = "20px";
  }
   if (error)
   {
    form.username.focus();
    eobj.innerHTML=error;
    return false;
   }
  return true;
 }
 
 function validatePwd(form) 
  { 
        var eobj1=document.getElementById('passworderror');
 
    var minLength=6;
    var invalid=' ';
    var pw1=form.password.value;
 
    var error=false;
    eobj1.innerHTML='';
 
    if (pw1.length<1)
      {
        error='Please enter your password.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    else if (pw1.length < minLength)
      {
        error='Your password must be at least ' + minLength + ' characters long. Try again.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    else if (pw1.indexOf(invalid) > -1)
      {
        error='Sorry, spaces are not allowed.';
        eobj1.style.color='red';
        eobj1.style.fontSize = "20px";
      }
    if (error)
      {
        form.password.focus();
        eobj1.innerHTML=error;
        return false
      }
    return true;
  }   
</script>
<div class="header">

        <div class="dropdown">
          <button class="dP"><img src=../img/drop1.jpg></button>
          <div class="dropdown-content">
          <a href="main.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
          <a href="contact.php">Contact Us</a>  
          </div>
        </div>
        
        <div class="logo"><img src=../img/student.png>
        </div>
        
        
        <div class="heading">
        
        
        <div style="font-size:30px;font-weight:bold;font-family:'Helvetica Neue'; color:white;">STUDENT INFORMATION CENTER</div>  
            <div style="font-size:24px;font-weight:bold;font-family:'Helvetica Neue'; color:white;letter-spacing:2px;word-spacing:7px;padding-top:1px;">छात्र जानकारी केंद्र</div>
            <div style="font-size:16px;font-family:'Helvetica Neue';color:white;padding-top:2px;">(An Centre of National Importance under Government of India, Ministry of Human Resource Development)</div>
        </div>
        
        
        </div>
        
        
        <div class="navbar">
          <a href="../main.php">Home</a>
          <a href="../about.php">About Us</a>
          <div class="d11">
            <button class="dbtn"><b>Login</b></button>
            <div class="d11-content">
              <a href="admin_login.php">Admin Login</a>
              <a href="../login.php">Student Login</a>
            </div>
          </div>
           <a href="../register.php"><b>Register</b></a>
          <a href="../contact.php">Contact Us</a>
        </div>
        
        
        <div class="content">
                <div class="head-text">
                        <h1 align="center">Administrator Login<br></h1>
                        <form method="post" action="admin_login.php" name="form">
                                <table align=center cellspacing=20>
                                <tr>
                                    <td><font color=white size=3><b>Username* : </b></font></td>
                                    <td><input type="text" size=30 id="realname" placeholder="Enter Username" name="uname" onblur="checkName(form);"><span id="realnameerror" required /></span>

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><font color=white size=3><b>Password* : </b></font></td>
                                    <td><input type="text" size=30 placeholder="Type Password" name="pwd" required="required" id="area3"></td>
                                </tr>
                                <tr>
                                  
                                  <td colspan="2" align="center"><input type="submit" name="login_admin" value="Login" id="login"></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><a href="../login.php" style="color: #81D86A;">Switch to Student ?</a></td>
                        </tr>
                        </table>
                      </form>
                    </div>
        
        </div>
        
        <?php include('footer.php');?>
        
        </body>
        </html>
<?php
include('../dbcon.php');

if(isset($_POST['login_admin']))
{
  $username = $_POST['uname'];
  $password = $_POST['pwd'];

  $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  $run = mysqli_query($conn,$qry);
  $row = mysqli_num_rows($run);
  if($row < 1)
  {
    ?>
    <script>
      alert('Username and Password not match !!');
      window.open('admin_login.php','_self');
    </script>
    <?php
  }
  else
  {
    $data=mysqli_fetch_assoc($run);

    $id =$data['id'];
    //echo "pid=".$id;

    $_SESSION['uid']=$id;
    ?>
    <script>
      window.open('admin_dash.php','_self');
    </script>
    <?php

  }

}

?>