<?php
session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location: login.php');
    }
?>
<?php
    include('dbcon.php');
    $id = $_GET['sid'];
    $sql = "SELECT * FROM `personal_details` WHERE `pid`='$id';";
    $run = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($run);



?>
<title>UpdateStudent</title>
<header>
  <h1>
                Welcome <?php echo $data['fname']?>
            </h1>
            <h2>Update Your Details</h2>
        <h4>
            <a href="profile.php?sid=<?php echo $id;?>" style="float:left";margin-right:30px; color:#fff; font-size:20px;>Back to Profile Page</a>
        </h4>

</header>
<script type="text/javascript">
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
      function Openbox() {
          var x = document.getElementById("box");
         if (x.style.display === "none") {
             x.style.display = "block";
  } else {
    x.style.display = "none";
  }
      }


</script>

<div class="container">
<form method="post" action="studentupdatedata.php" enctype="multipart/form-data">
        <table>


            <tr>
            <td>
              <strong><font size=5 color="#cc0000" face="Tahoma">Registration no. : </font></strong>
            </td>
            <td>
              <input type="text" name="regno" id="regno" Placeholder="registration no." onblur="validateReg();" value=<?php echo $data['reg_no'];?> required /><span id="regis"></span>
            </td>

          </tr>


          <tr>
            <td>
              <font size=5 color="#cc0000" face="Tahoma">Phone Number:  </font>
            <td>
              <input type="Phone" name="phone"  pattern="[1-9]{1}[0-9]{9}" Placeholder="phone no." id="phoneno" onblur="validPhone(form);" value=<?php echo $data['phone'];?> required /><span id="phonenoerror"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="userid"><font size=5 color="#cc0000" face="Tahoma">Username: </label> </font>
            </td>
            <td>
              <input type="text" name="username" id="realname" placeholder="username" onblur="checkName(form);"  value=<?php echo $data['username'];?>><span id="realnameerror" required /></span>
            </td>
          </tr>
          <tr>
            <td>
              <label for="passid"><font size=5 color="#cc0000" face="Tahoma">Password: </label></font>
            </td>
            <td>
              <input type="password" placeholder="Password" name="password" id="password" maxlength="12" onblur="validatePwd(form);"  required /><span id="passworderror" ></span>
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
          <input type="text" name="fname"  id="name1" size="30" onblur="validateName1('name1')" value=<?php echo $data['fname'];?> required /><span id="a"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Middle Name: </font>
        </td>
        <td>
          <input type="text" name="mname" id="name2" size="30" onblur="validateName2('name2')" value=<?php echo $data['mname'];?> /><span id="b"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Last Name: </font>
        </td>
        <td>
          <input type="text" name="lname" id="name3" size="30" onblur="validateName3('name3')"  value=<?php echo $data['lname'];?> required /><span id="c"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Guardian's Name: </font>
        </td>
        <td>
          <input type="text" name="gname" id="name4" size="30" onblur="validateName4('name4')" value=<?php echo $data['gname'];?> required /><span id="d"></span>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">DOB: </font>
        </td>
        <td>
          <input type="date" name="dob" id="txtDate" onblur="submitBday();" onsubmit="valdob()" size="30" value=<?php echo $data['dob'];?> required /><span id="erdob"></span>
        </td>
      </tr>

      <tr>
        <td>
          <font size=5 color="#cc0000" face="Tahoma">Email id: </font>
        </td>
        <td>
          <input type="email" name="email" id="email" Placeholder="email" onblur="validateEmail('email')" value=<?php echo $data['email'];?> /><span id="error" ></span>
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
          <textarea  rows="5" cols="60"  name="cadd" id="area1" placeholder="enter address" value=<?php echo $data['cadd'];?> required></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Pin-code: </font>
        </td>
        <td>
          <input type="number" name="cpin" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value=<?php echo $data['cpin'];?>  class="required" required>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">State: </font>
        </td>
        <td>
          <input type="text" name="cstate" class="required" value=<?php echo $data['cstate'];?> required>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="#cc0000" face="Tahoma">Country: </font>
        </td>
        <td>
          <input type="text" name="ccoun" class="required" value=<?php echo $data['ccoun'];?> required>
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
        <input type="hidden" name="sid" value="<?php echo $data['pid'];?>">
         <input type="submit" name="submit_add" value="Update" style="margin-left: 40px;">
    </div>

    </form>
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
.container{
    padding-top: 20px;
    padding-left: 100px;
}
</style>