<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
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
</html>
<title>UpdateStudent</title>
<header>
  <h1>
                Reset Password
            </h1>
        <h4>
            <a href="login.php" style="float:left";margin-right:30px; color:#fff; font-size:20px;>Back to Login Page</a>
        </h4>

</header>

<div class="content">
  <form action="forgotpassword.php" name="form" method="POST">



  <div id="upper">
    <center>
    <table>

      <tr>
            <td>
              <strong><font size=5 color="black" face="Tahoma">Registration no. : </font></strong>
            </td>
            <td>
              <input type="text" name="regno" id="regno" Placeholder="registration no." onblur="validateReg();" required /><span id="regis"></span>
            </td>

          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="black" face="Tahoma">New Password: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="npassword" id="password" maxlength="12" onblur="validatePwd(form);" required /><span id="passworderror" ></span>
            </td>
          </tr>
          <tr>
            <td>
              <font size="5" color="black" face="Tahoma">Confirm New Password:  </font>
            </td>
            <td>
              <input type="password" name="cnpassword" id="confirm_password" Placeholder="Confirm Password"  onkeyup="validatePassword();" required /><span id="confirmMessage"></span>
            </td>
          </tr>
          <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Security Question </font>
        </td>
        <td>
          <select name="security" id="security">
          <option value="-1" selected>Select..</option>
          <option>What is your favourite colour?</option>
          <option >What is your pet's name?</option>
          <option >What is your favourite teacher's name?</option>
          <option >Who is your favourite author?</option>
          <option >Who is your favourite actor/actress?</option>
          </select>
        </td>
        <td>
          <textarea rows="1" cols="20"  name="security_text" id="area3" placeholder="Your answer" required></textarea>
        </td>
      </tr>
      <tr>
      	<td><input type="submit" name="forgotpassword" value="Reset"></td>
      </tr>
          </table>
      </center>
  </div>
</form>
</div>
<?php
	include('dbcon.php');
	if(isset($_POST['forgotpassword']))
{
  $regno = $_POST['regno'];
  $npassword = md5($_POST['npassword']);
  $security_text=$_POST['security_text'];

  $qry = "SELECT * FROM `personal_details` WHERE `reg_no`='$regno' AND `security`='$security_text' and `activate`=1";
  $run = mysqli_query($conn,$qry);
  $row = mysqli_num_rows($run);
  if($row < 1)
  {
    ?>
    <script>
      alert('Error Processing Request !!');
      window.open('forgotpassword.php','_self');
    </script>
    <?php
  }
  else
  {
    $qry1="UPDATE `personal_details` SET `password`='$npassword' where `reg_no`='$regno'";
    $run1=mysqli_query($conn,$qry1);
    ?>
    <script>
    	alert('Password Reset Successful !!');
      	window.open('login.php','_self');
    </script>
    <?php

  }

}








?>


















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
.container{
    padding-top: 20px;
    padding-left: 100px;
}
.content{
	margin-top:5px;
	width:100%;
	height:250%;
  background-color: #f1f0ee;
		
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}



#upper{
width:70%;
float:left;
margin-left:300px;
margin-right:40px;
margin-top:20px;
}

input[type=text],input[type=date],input[type=email],input[type=phone],input[type=number],input[type=file],input[type=password]{
width:300px;
padding:10px 18px;
margin:8px 0;
display:inline-block;
border:1px solid black;
box-sizing:border-box;
border-radius:5px;

}

input[type=submit],input[type=reset]{
width=150px;
padding:10px 15px;
border:1px solid black;
box-sizing:border-box;
border-radius:5px;
font-size:15px;
background-color:#f1f0ee;
color:solid black;
font-family:Tahoma;
margin-top: 20px;
margin-left:300px;
}

input[type=submit]:hover{
opacity:0.5;
}
input[type=reset]:hover{
opacity:0.8;
}
#regno{
	border:1px solid black;
}

#security{
  margin-top: 10px;
  border:1px solid black;
  padding:8px 10px;
  border-radius: 5px;
}
#area1{
  border:1px #ccc;
  padding:8px 10px;
  border-radius: 5px;
}
#area2{
  border:1px #ccc;
  padding:8px 10px;
  border-radius: 5px;
}
#txt{
  border:1px #ccc;
  padding:8px 10px;
  border-radius: 5px;
}
#area3{
  border:1px solid black;
  padding:8px 10px;
  border-radius: 5px;
  margin-top: 15px;
  margin-left:;

}
#blood{
  margin-top: 10px;
  border:1px solid black;
  padding:8px 10px;
  border-radius: 5px;
}

#area{
padding:8px 10px;
}


#upper2{
width:100%;
float:left;
margin-top:20px;
}
</style>