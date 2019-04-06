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
<title>AddPage</title>
<header>
  <h1>
                ADD STUDENT
            </h1>
        <h4>
            <a href="admin_dash.php" style="float:left";margin-right:30px; color:#fff; font-size:20px;>Back to dashboard</a>
        </h4>

</header>
<script type="text/javascript" >
    function validateName(x)
      {
        var re = /^[A-Za-z ]+$/;        
        var message1 = document.getElementById('a');        
        var message2 = document.getElementById('a');        
        var message3 = document.getElementById('a');        
                
        if(x=='name' && document.getElementById(x).value=='')
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
 else if (!phone.length > 1 || phone.length < 10)
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
      document.getElementById("age").innerHTML=age;
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
        else if (!phone.length > 1 || phone.length < 10)
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
<div class="container">
    <form method="post" action="add_student.php" enctype="multipart/form-data">
        <table>


            <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">Registration no. : </font></strong>
            </td>
            <td>
              <input type="text" name="regno" id="regno" Placeholder="registration no." onblur="validateReg();" required /><span id="regis"></span>
            </td>

          </tr>


          <tr>
            <td>
              <font size=5 color="#cc0000" face="Tahoma">Phone Number:  </font>
            <td>
              <input type="Phone" name="phone"  pattern="[1-9]{1}[0-9]{9}" Placeholder="phone no." id="phoneno" onblur="validPhone(form);" required /><span id="phonenoerror"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="userid"><font size=5 color="#cc0000" face="Tahoma">Username: </label> </font>
            </td>
            <td>
              <input type="text" name="username" id="realname" placeholder="username" onblur="checkName(form);"><span id="realnameerror" required /></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="#cc0000" face="Tahoma">Password: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="password" id="password" maxlength="12" onblur="validatePwd(form);" required /><span id="passworderror" ></span>
            </td>
          </tr>
          <tr>
            <td>
              <font size=5 color="#cc0000" face="Tahoma">Confirm Password:  </font>
            </td>
            <td>
              <input type="password" name="cpassword" id="confirm_password" Placeholder="Confirm Password"  onkeyup="validatePassword();" required /><span id="confirmMessage"></span>
            </td>
          </tr>
            
            <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">First Name: </font>
        </td>
        <td>
          <input type="text" name="fname"  id="name1" size="30" onblur="validateName1('name1')" required /><span id="a"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Middle Name: </font>
        </td>
        <td>
          <input type="text" name="mname" id="name2" size="30" onblur="validateName2('name2')" /><span id="b"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Last Name: </font>
        </td>
        <td>
          <input type="text" name="lname" id="name3" size="30" onblur="validateName3('name3')" required /><span id="c"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Guardian's Name: </font>
        </td>
        <td>
          <input type="text" name="gname" id="name4" size="30" onblur="validateName4('name4')" required /><span id="d"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">DOB: </font>
        </td>
        <td>
          <input type="date" name="dob" id="txtDate" onblur="submitBday();" onsubmit="valdob()" size="30" required /><span id="erdob"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Age: </font>
        </td>
        <td>
          <span id="age" name="age"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size=5 color="#cc0000" face="Tahoma">Email id: </font>
        </td>
        <td>
          <input type="email" name="email" id="email" Placeholder="email" onblur="validateEmail('email')" /><span id="error" ></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Blood Group: </font>
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
          <font size="5" color="#cc0000" face="Tahoma">Gender: </font>
        </td>
        <td>
          <font size="4" color="black"><input type="radio" name="gender" value="male" size="10" required>Male</font>
          <font size="4" color="black"><input type="radio" name="gender" value="Female" size="10" required>Female</font>
          <font size="4" color="black"><input type="radio" name="gender" value="Other" size="10" required>Other</font>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma" >Caste: </font>
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
          <font size="5" color="#cc0000" face="Tahoma">Correspondence Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60"  name="cadd" id="area1" placeholder="enter address" required></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Pin-code: </font>
        </td>
        <td>
          <input type="number" name="cpin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">State: </font>
        </td>
        <td>
          <input type="text" name="cstate" class="required" required>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Country: </font>
        </td>
        <td>
          <input type="text" name="ccoun" class="required" required>
        </td>
      </tr>
                
      <tr>
        <td>
          <input type="checkbox" name="same" onclick="FillBox(this.form)"><font size="4" color="#cc0000" face="Tahoma">Check if permanent address is same as temporary address</font>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Permanent Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60"  name="padd" id="area2"  placeholder="enter address" required></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Pin-code:</font>
        </td>
        <td>
          <input type="number" name="ppin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">State:</font>
        </td>
        <td>
          <input type="text" name="pstate" class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Country:</font>
        </td>
        <td>
          <input type="text" name="pcoun" class="required" required>
        </td>
      </tr>
        


    </table>
<table>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Hobby:</font></br>
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
          <font size="5" color="#cc0000" face="Tahoma">Extra-curricular activities:</font><br>
        </td>
        <td>
          <br><textarea id="txt" rows="5" cols="50" name="eac" ></textarea>
        </td>
      </tr>

    </table>

    <div class="btn">
         <input type="submit" name="submit_add" value="Submit">
    </div>

    </form>
</div>
<?php
    if (isset($_POST['submit_add'])) 
    {       
        include('../dbcon.php');

        $username=$_POST['username'];
        $phone=$_POST['phone'];
        $regno=$_POST['regno'];
        $password=md5($_POST["password"]);

        //$profile_pic=$_POST["profile_pic"];
        //echo $profile_pic;
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



        $sql="INSERT INTO personal_details (username,reg_no,password, fname, mname, lname, gname, dob, age, email, phone, bg, gender, caste, cadd, cpin, cstate, ccoun, padd, ppin, pstate, pcoun, hobby, hobbyextra, eac) VALUES ('$username','$regno','$password', '$fname', '$mname', '$lname', '$gname', '$dob', '21', '$email', '$phone', '$bg', '$gender', '$caste', '$cadd', '$cpin', '$cstate', '$ccoun', '$padd', '$ppin', '$pstate', '$pcoun', '$hobby', '$hobbyextra', '$eac')";

        $run=mysqli_query($conn, $sql);
        if($run==true)
        {
            ?>
            <script>
                alert('Data Inserted Succesfully');
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
    background-color: ;
}
.btn{
    padding-top: 50px;
    padding-left: 300px;
}
</style>