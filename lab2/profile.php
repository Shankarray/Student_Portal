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

<html>
<head>
  <title>Profile Page</title>
  <?php include('header.php'); ?>
<style>


.row1{
  margin-top: 9px;
  width:35%;
  height:130%;
  background-image: url('img/profile_background.jpeg');
  float:left;


}



.a1{
  width:40%;
  height:12%;
  background-color: #8bc34a;
  margin-top: 20%;
  margin-left: 15%
}

.a2{
  width:85%;
  height:38%;
  /*background-color:pink;*/
  margin-top: 15%;
  margin-left: 10%
}

.row2{
  margin-top: 9px;
  width:65%;
  height:130%;
  background-image: url('img/p2_bg2.jpeg');
  float:left;

}


#rc 
{
    border-radius: 7px;
}
.button {
  background-color:  #3f51b5; /* Green */
  border-radius: 8px;
  color:#fff;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
.btn_contain{
  height: 20%;
  margin-left: 600px;
  margin-top: 20px;
  background-color:black;
}
</style>
<script>


function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


</script>

</head>

<body>
  <div id="printableArea">
<div class="row1" id="r1">

<div class="a2" id="rc">  
<table cellpadding=7 align=center>  
<h2 align="center">Welcome <?php echo $data['fname']?></h2>  
<tr>
        <td>
          <font size="5" color="white" face="Tahoma">Registration Number: </font>
        </td>
        <td>
          <input type="text" name="fname"  id="rc" size="25" value=<?php echo $data['reg_no'];?>>
        </td>
      </tr>  
<tr>
        <td>
          <font size="5" color="white" face="Tahoma">First Name: </font>
        </td>
        <td>
          <input type="text" name="fname"  id="rc" size="25" value=<?php echo $data['fname'];?>>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Middle Name: </font>
        </td>
        <td>
          <input type="text" id="rc" size="25" value=<?php echo $data['mname'];?>>
        </td>
      </tr>


      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Last Name: </font>
        </td>
        <td>
          <input type="text" id="rc" size="25" value=<?php echo $data['lname'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Phone Number: </font>
        </td>
        <td>
          <input type="text" id="rc" size="25" value=<?php echo $data['phone'];?>>
        </td>
      </tr>
       <tr>
        <td>
          <font size="5" color="white" face="Tahoma">DOB: </font>
        </td>
        <td>
          <input type="text" id="rc" size="30" value=<?php echo $data['dob'];?>>
        </td>
      </tr>

      <tr>
        <td>
          <font size=5 color="white" face="Tahoma">Email id: </font>
        </td>
        <td>
          <input type="email" name="email" id="rc" size="30" value=<?php echo $data['email'];?>>
        </td>
      </tr>
</table>  

</div>  
</div>
<div class="row2" id="r2">
  
<form>
<fieldset>
<legend><font size="5" weight="bold" >Personal Details</font></legend>
<table border=3 cellpadding=3 align=center>      
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Guardian's Name: </font>
        </td>
        <td>
          <input type="text" id="rc" size="40" value=<?php echo $data['gname'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Blood Group: </font>
        </td>
        <td>
          <input type="text" id="rc" size="30" value=<?php echo $data['bg'];?>>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Gender: </font>
        </td>
        <td>
          <input type="text" id="rc" size="30" value=<?php echo $data['gender'];?>>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="white" face="Tahoma" >Caste:</font>
        </td>
        <td>
          <input type="text" name="caste" value=<?php echo $data['caste'];?>>
        </td>
      </tr>



      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Correspondence Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60" id="rc" ><?php echo $data['cadd'];?></textarea>
          
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Pin-code: </font>
        </td>
        <td>
          <input type="number" id="rc" value=<?php echo $data['cpin'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">State: </font>
        </td>
        <td>
          <input type="text" id="rc" value=<?php echo $data['cstate'];?>>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Country: </font>
        </td>
        <td>
          <input type="text" id="rc" value=<?php echo $data['ccoun'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Permanent Address: </font>
        </td>
        <td>
          <textarea rows="5" cols="60" id="rc"><?php echo $data['padd'];?></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">State:</font>
        </td>
        <td>
          <input type="text" id="rc" value=<?php echo $data['pstate'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Country:</font>
        </td>
        <td>
          <input type="text" id="rc" value=<?php echo $data['pcoun'];?>>
        </td>
      </tr>
      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Hobby:</font></br>
        </td>
        <td>
          <font size="4" color="white" face="Tahoma">
            <textarea rows="5" cols="35"><?php echo $data['hobby']." , ".$data['hobbyextra'] ?></textarea><br><br> 
          </font>
          <br>
        </td>
      </tr>

      <tr>
        <td>
          <font size="5" color="white" face="Tahoma">Extra-curricular activities:</font><br>
        </td>
        <td>
          <br><textarea id="txt" rows="5" cols="50" id="rc"><?php echo $data['eac']?></textarea>
        </td>
      </tr>  

</table>
</fieldset>

</form>
</div>
</div>

<div class="btn_contain">
    <button class="button"><a href="student_update.php?sid=<?php echo $data['pid'];?>"><font color="#fff">Update</font></a></button>
    <button class="button"><a href="student_logout.php"><font color="#fff">Log Out</font></a></button>
    <button class="button" onclick="printDiv('printableArea')">Print</button>
</div>


</body>


</html>