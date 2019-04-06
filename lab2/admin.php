<html>
<head>
  <title>AdminLogin</title>

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
  background-image:url('img/registration1.jpg');  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}










</style>
<script type="text/javascript">



    function validateReg()
      {
        var inp=document.getElementById('regno').value;
        var message = document.getElementById('regis');
        if(inp.length==8)
        {
          document.getElementById('regno').style.background ='white';
          message.innerHTML="";
          return true;
        } 
        else
        {
          document.getElementById('regno').style.background ='white';
          message.style.color='red';
          message.style.fontSize = "15px";
          message.innerHTML="Invalid registration no.";
          return false;
        }
      }

      
    function checkName(form)
      {
        var eobj=document.getElementById('realnameerror');
        var sRealName = form.realname.value;
        var oRE = /^[a-z0-9]+[_.-]?[a-z0-9]+$/i;
        var error=false;
        eobj.innerHTML='';
        if (sRealName == '') 
          {
            error='Username cannot be blank!';
            form.realname.focus();
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        else if (sRealName.length < 4)
          {
            error="Username should be atleast 4 characters long";
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        else if (!oRE.test(sRealName))
          {
            error="Incorrect format.";
            eobj.style.color='red';
            eobj.style.fontSize = "15px";
          }
        if (error)
          {
            form.realname.focus();
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
            eobj1.style.fontSize = "15px";
          }
        else if (pw1.length < minLength)
          {
            error='Your password must be at least ' + minLength + ' characters long. Try again.';
            eobj1.style.color='red';
            eobj1.style.fontSize = "15px";
          }
        else if (pw1.indexOf(invalid) > -1)
          {
            error='Sorry, spaces are not allowed.'; 
            eobj1.style.color='red';
            eobj1.style.fontSize = "15px";
          } 
        if (error)
          {
            form.password.focus();
            eobj1.innerHTML=error;
            return false
          }
        return true;
      } 

    function validatePassword()
      {
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
        var message = document.getElementById('confirmMessage');
        if(password.value != confirm_password.value)
          {
            message.style.color='red';
            message.style.fontSize = "15px";
            message.innerHTML = "Passwords do not Match!";
            return false;
          }
        else
          {
            message.style.fontSize = "15px";
            message.style.color='green';
            message.innerHTML = "Passwords Match!"
            return true;
          }
      }

        </script>


<body>

<div class="header">


<div class="dropdown">
  <button class="dP"><img src=img/drop1.jpg></button>
  <div class="dropdown-content">
  <a href="main.php">Home</a>
  <a href="#">About Us</a>
  <a href="login.php">Login</a>
  <a href="register2.php">Register</a>
  <a href="contact us.php">Contact Us</a>  
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
      <a href="admin_login.php">Admin Login</a>
      <a href="login.php">Student Login</a>
    </div>
  </div>
   <a href="register.php"><b>Register</b></a>
  <a href="contact.php">Contact Us</a>
</div>


<div class="content">

    <center><font size=6  color="black" face="Tahoma">Administrator Login</font></center><br><br>
    <form method="post" action="admin_login.php">
  <table align="center">
    <tr>
      <td>Username</td><td><input type="text" name="uname" required</td>
    </tr>
    <tr>
      <td>Password</td><td><input type="password" name="pwd" required</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="admin_login" value="login"</td>
    </tr>

  </table>

</form>

</div>



</body>
</html>




















