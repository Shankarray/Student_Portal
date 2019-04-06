<html>
<head>
	<title>Register Page</title>

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
	height:300%;
  background-color: #f1f0ee;
		
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}



#upper{
width:50%;
float:left;
margin-left:400px;
margin-right:10px;
margin-top:20px;
}

input[type=text],input[type=date],input[type=email],input[type=phone],input[type=number],input[type=file],input[type=password],input[type=file]{
width:300px;
padding:10px 18px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
border-radius:5px;

}

input[type=submit],input[type=reset]{
width=200px;
height:40px;
padding:10px 15px;
border:1px solid black;
box-sizing:border-box;
border-radius:5px;
font-size:18px;
background-color:#7a3a95;
color:white;
font-family:Tahoma;
cursor:pointer;
margin-left:20px;
}

input[type=submit]:hover{
opacity:0.8;
}
input[type=reset]:hover{
opacity:0.8;
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
  margin-top: 10px;
  margin-left: -30px;

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
#talkbox{
  background-color:#fff; 
  border-color:solid black;
  color: solid black;
}

</style>	

<script type="text/javascript" >
function validateName1(x)
      {
        var re = /^[A-Za-z ]+$/;        
        var message1 = document.getElementById('a');        
        var message2 = document.getElementById('a');        
        var message3 = document.getElementById('a');        
                
        if(x=='name1' && document.getElementById(x).value=='')
        {
          document.getElementById(x).style.background ='white';
          message1.style.color='red';
          message1.style.fontSize = "15px";
          message1.innerHTML="Please enter name";
          return true;
        }
        
        else if(re.test(document.getElementById(x).value))
        {
          document.getElementById(x).style.background ='white';
          message3.innerHTML="";
          return true;
        }
        
        else{
          document.getElementById(x).style.background ='white';
          message2.style.color='red';
          message2.style.fontSize = "15px";
          message2.innerHTML="Enter only alphabets";
          return false; 
        }
      }
      
      function validateName2(x)
      {
        var re = /^[A-Za-z ]+$/;        
        var message4 = document.getElementById('b');        
        var message5 = document.getElementById('b');        
        var message6 = document.getElementById('b');        
                
        if(x=='name2' && document.getElementById(x).value=='')
        {
          document.getElementById(x).style.background ='white';
          message4.innerHTML="";
          return true;
        }
        
        else if(re.test(document.getElementById(x).value))
        {
          document.getElementById(x).style.background ='white';
          message5.innerHTML="";
          return true;
        }
        
        else{
          document.getElementById(x).style.background ='white';
          message6.style.color='red';
          message6.style.fontSize = "15px";
          message6.innerHTML="Enter only alphabets";
          return false; 
        }
      }
function validateName3(x)
      {
        var re = /^[A-Za-z ]+$/;        
        var message7 = document.getElementById('c');        
        var message8 = document.getElementById('c');        
        var message9 = document.getElementById('c');        
                
        if(x=='name3' && document.getElementById(x).value=='')
        {
          document.getElementById(x).style.background ='white';
          message7.style.color='red';
          message7.style.fontSize = "15px";
          message7.innerHTML="Please enter name";
          return true;
        }
        
        else if(re.test(document.getElementById(x).value))
        {
          document.getElementById(x).style.background ='white';
          message8.innerHTML="";
          return true;
        }
        
        else{
          document.getElementById(x).style.background ='white';
          message9.style.color='red';
          message9.style.fontSize = "15px";
          message9.innerHTML="Enter only alphabets";
          return false; 
        }
      }
      
function validateName4(x)
      {
        var re = /^[A-Za-z ]+$/;        
        var message = document.getElementById('d');       
        var message10 = document.getElementById('d');       
        var message11 = document.getElementById('d');       
                
        if(x=='name4' && document.getElementById(x).value=='')
        {
          document.getElementById(x).style.background ='white';
          message.style.color='red';
          message.style.fontSize = "15px";
          message.innerHTML="Please enter name";
          return true;
        }
        
        else if(re.test(document.getElementById(x).value))
        {
          document.getElementById(x).style.background ='white';
          message10.innerHTML="";
          return true;
        }
        
        else{
          document.getElementById(x).style.background ='white';
          message11.style.color='red';
          message11.style.fontSize = "15px";
          message11.innerHTML="Enter only alphabets";
          return false; 
        }
      }     
      
      
function validateEmail(email){ 
        var re = /\S+@\S+\.\S+/;
        var message = document.getElementById('error');
        if(re.test(document.getElementById(email).value) || document.getElementById(email).value==''){
          document.getElementById('email').style.background ='white';
          message.innerHTML="";
          return true;
        }else{
          document.getElementById('email').style.background ='white';
        message.style.color='red';
        message.style.fontSize = "15px";
        message.innerHTML="Invalid email id";
          return false;
        }
      }   

function validPhone(form)
{
 var eobj=document.getElementById('phonenoerror');
 var valid = '0123456789';
 var phone = form.phoneno.value;
 var error=false;
 var i=0;
 var temp;
 eobj.innerHTML='';
 if (phone == '')
 {
  error='This field is required. Please enter phone number';
  eobj.style.color='red';
   eobj.style.fontSize = "15px";
 }
 else if (!phone.length > 1 && phone.length < 10)
 {
  error='Invalid phone number length! Please try again.';
  eobj.style.color='red';
   eobj.style.fontSize = "15px";
 }
 else
 {
  for (i=0; i < phone.length; i++)
 {
   temp = '' + phone.substring(i, i + 1);
   if (valid.indexOf(temp) == -1)
    {
    error='Invalid characters in your phone. Please try again.';
  eobj.style.color='red';
   eobj.style.fontSize = "15px";
    }
  }
 }
 if (error)
 {
  form.phoneno.focus();
  eobj.innerHTML=error;
  return false;
 }
 return true;
}



function submitBday () 
      {
        var input = document.getElementById( 'txtDate' ).value;
      var d = new Date( input );
        var year = d.getFullYear();
        var month = d.getMonth();
        var day = d.getDate();
        var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1;
      var yyyy = today.getFullYear();
      var age=0;
      if(yyyy!=year)
        age=yyyy-year-1;
      if(month<mm)
        age+=1;
      else if(mm==month && day<=dd)
        age+=1;
      document.getElementById('age').innerHTML=age;
    }
    
    function FillBox(f)
      {
        if(f.same.checked==true)
        {
          f.padd.value=f.cadd.value;
          f.ppin.value=f.cpin.value;
          f.pstate.value=f.cstate.value;
          f.pcoun.value=f.ccoun.value;
        }
      }
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
function tellus() 
 { 
  if (document.getElementById('talk').checked) 
  {
    document.getElementById('talkbox').disabled = false;
    }

  else
  {
     document.getElementById('talkbox').disabled = true; 
     }

   } 

</script>

</head>
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
  <form action="register.php" name="form" method="POST" enctype="multipart/form-data">
  <div id="main">
    <center><font size=10 color="black"><b>Register Here!</b></font></center>
    <p><a href="login.php" style="float: right; margin-right: 20px;" >Already a Member? Log In</a></p>
  </div>



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
              <font size=5 color="black" face="Tahoma">Phone Number:  </font>
            <td>
              <input type="Phone" name="phone"  pattern="[1-9]{1}[0-9]{9}" Placeholder="phone no." id="phoneno" onblur="validPhone(form);" required /><span id="phonenoerror"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="userid"><font size=5 color="black" face="Tahoma">Username: </label> </font>
            </td>
            <td>
              <input type="text" name="username" id="realname" placeholder="username" onblur="checkName(form);"><span id="realnameerror" required /></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="black" face="Tahoma">Password: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="password" id="password" maxlength="12" onblur="validatePwd(form);" required /><span id="passworderror" ></span>
            </td>
          </tr>
          <tr>
            <td>
              <font size="5" color="black" face="Tahoma">Confirm Password:  </font>
            </td>
            <td>
              <input type="password" name="cpassword" id="confirm_password" Placeholder="Confirm Password"  onkeyup="validatePassword();" required /><span id="confirmMessage"></span>
            </td>
          </tr>
      
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">First Name: </font>
        </td>
        <td>
          <input type="text" name="fname"  id="name1" size="30" onblur="validateName1('name1')" required /><span id="a"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Middle Name: </font>
        </td>
        <td>
          <input type="text" name="mname" id="name2" size="30" onblur="validateName2('name2')" /><span id="b"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Last Name: </font>
        </td>
        <td>
          <input type="text" name="lname" id="name3" size="30" onblur="validateName3('name3')" required /><span id="c"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Guardian's Name: </font>
        </td>
        <td>
          <input type="text" name="gname" id="name4" size="30" onblur="validateName4('name4')" required /><span id="d"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">DOB: </font>
        </td>
        <td>
          <input type="date" name="dob" id="txtDate" onblur="submitBday();" onsubmit="valdob()" size="30" required /><span id="erdob"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Age: </font>
        </td>
        <td>
          <span id="age" name="age"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size=5 color="black" face="Tahoma">Email id: </font>
        </td>
        <td>
          <input type="email" name="email" id="email" Placeholder="email" onblur="validateEmail('email')" /><span id="error" ></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Blood Group: </font>
        </td>
        <td>
          <select name="bg" id="blood">
          <option value="-1" selected>select..</option>
          <option>A+</option>
          <option >B+</option>
          <option >AB+</option>
          <option >O+</option>
          <option >O-</option>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Gender: </font>
        </td>
        <td>
          <font size="4" color="black"><input type="radio" name="gender" value="male" size="10" required>Male</font>
          <font size="4" color="black"><input type="radio" name="gender" value="Female" size="10" required>Female</font>
          <font size="4" color="black"><input type="radio" name="gender" value="Other" size="10" required>Other</font>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma" >Caste: </font>
        </td>
        <td>
          <font size="4" color="black"><input type="radio" name="caste" id="cast" value="SC" required>SC</font>
          <font size="4" color="black"><input type="radio" name="caste" id="cast" value="ST" required>ST</font>
          <font size="4" color="black"><input type="radio" name="caste" id="cast" value="OBC" required>OBC</font>
          <font size="4" color="black"><input type="radio" name="caste" id="cast" value="GEN" required>GEN</font>
        </td>
      </tr>



      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Correspondence Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60"  name="cadd" id="area1" placeholder="Enter correspndance address" required></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Pin-code: </font>
        </td>
        <td>
          <input type="number" name="cpin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">State: </font>
        </td>
        <td>
          <input type="text" name="cstate" class="required" required>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Country: </font>
        </td>
        <td>
          <input type="text" name="ccoun" class="required" required>
        </td>
      </tr>
                
      <tr>
        <td>
          <input type="checkbox" name="same" onclick="FillBox(this.form)"><font size="4" color="#cc0000" face="Tahoma">Check if parmanent address is same as temporary address</font>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Permanent Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60"  name="padd" id="area2"  placeholder="Enter Permanent address" required></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Pin-code:</font>
        </td>
        <td>
          <input type="number" name="ppin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">State:</font>
        </td>
        <td>
          <input type="text" name="pstate" class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Country:</font>
        </td>
        <td>
          <input type="text" name="pcoun" class="required" required>
        </td>
      </tr>
        


    </table>
    </center>
    </br>


    <table>
      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Hobby:</font></br>
        </td>
        <td>
          <font size="4" color="#cc0000" face="Tahoma">
            <input type="checkbox" name="hobby1" value="Reading"  checked>Reading <br>
            <input type="checkbox" name="hobby2" value="Singing" >Singing <br> 
            <input type="checkbox" name="hobby3" value="Dancing" >Dancing <br>
            </font>
            <br>
          <textarea id='txt' rows="4" cols="30" name="hobby4" placeholder="Please specify your hobby if you select 'others'"></textarea><br><br>  
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="black" face="Tahoma">Extra-curricular activities:</font><br>
        </td>
        <td>
          <br><textarea id="txt" rows="5" cols="50" name="eac" ></textarea>
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
    </table>
    </br></br>
    <center>
      <div id="upper2">
        <a href="add_personal.php"><input type="reset"></a>
        <input type="submit" value="Submit" name="add_personal_submit" />
      </div>
    </center>
  </form>
  </div>

</body>
</html>

<?php
    if (isset($_POST['add_personal_submit'])) 
    {       
        include('dbcon.php');
        $username=$_POST['username'];
        $phone=$_POST['phone'];
        $regno=$_POST['regno'];
        $password=md5($_POST["password"]);
        $fname=$_POST["fname"];
        $mname=$_POST["mname"];
        $lname=$_POST["lname"];
        $gname=$_POST["gname"];
        $dob=$_POST["dob"];
        //$age=$_POST["age"];

        //echo $age;
        $email=$_POST["email"];
        $bg=$_POST["bg"];
        $gender=$_POST["gender"];
        $caste=$_POST["caste"];


        $cadd=$_POST["cadd"];
        $cpin=$_POST["cpin"];
        $cstate=$_POST["cstate"];
        $ccoun=$_POST["ccoun"];

        $padd=$_POST["padd"];
        $ppin=$_POST["ppin"];
        $pstate=$_POST["pstate"];
        $pcoun=$_POST["pcoun"];
        $hobby1=$_POST["hobby1"];
        $hobby2=$_POST["hobby2"];
        $hobby3=$_POST["hobby3"];
        $hobby4=$_POST["hobby4"];
        $eac=$_POST["eac"];
        
        $hobby=$hobby1.','.$hobby2.','.$hobby3;
        $hobbyextra=$hobby4;
        $security_text=$_POST['security_text'];

        $sql="INSERT INTO personal_details (username,reg_no,password, fname, mname, lname, gname, dob, age, email, phone, bg, gender, caste, cadd, cpin, cstate, ccoun, padd, ppin, pstate, pcoun, hobby, hobbyextra, eac,security) VALUES ('$username','$regno','$password', '$fname', '$mname', '$lname', '$gname', '$dob', '21', '$email', '$phone', '$bg', '$gender', '$caste', '$cadd', '$cpin', '$cstate', '$ccoun', '$padd', '$ppin', '$pstate', '$pcoun', '$hobby', '$hobbyextra','$eac','$security_text')";

        $run=mysqli_query($conn, $sql);
        if($run==true)
        {
            ?>
            <script>
                alert('Registration Succesfull! ');
                window.open('login.php','_self');
            </script>
            <?php
        }
        else
        {
          ?>
            <script>
                alert('Registration Not Succesfull! ');
                window.open('register.php','_self');
            </script>
            <?php
        }
    }

?>



</body>
</html>