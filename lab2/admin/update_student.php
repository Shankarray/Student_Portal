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
<html>
<title>UpdatePage</title>
<header>
  <h1>
                Update Student
            </h1>
        <h4>
            <a href="admin_dash.php" style="float:left";margin-right:30px; color:#fff; font-size:20px;>Back to dashboard</a>
        </h4>

</header>
    <div class="container">
    <table align="center">
    <form action="update_student.php" method="post">
        <tr>
            <th>Registration no.: </th>
            <td><input type="text" name="regno" required="required"/></td>
            <th>Username : </th>
            <td><input type="text" name="username" required="required"/></td>
            <td colspan="2"> <input type="submit" name="search" value="Search"></td>
        </tr>
    </form>
</table>


<table align="center" width="98%" border="1" style="margin-top: 20px">
    <tr>
        <th>Sl No.</th>
        <th>Name</th>
        <th>Guardian Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Blood Group</th>
        <th>Gender</th>
        <th>Caste</th>
        <th>Address</th>
        <th>Pincode</th>
        <th>State</th>
        <th>Country</th>
        <th>Edit</th>




    </tr>

    <?php
    if(isset($_POST['search']))
    {
        include('../dbcon.php');
        $regno=$_POST['regno'];
        $username=$_POST['username'];
        $sql = "SELECT * FROM `personal_details` WHERE `reg_no`='$regno' AND `username`='$username' AND `activate`=1";
        $run = mysqli_query($conn,$sql);

        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='13'>No Record Exists</td></tr>";
        }
        else
        {
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $data['fname']." ".$data['mname']." ".$data['lname']; ?></td>
                    <td><?php echo $data['gname'];?></td>
                    <td><?php echo $data['dob'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['phone'];?></td>
                    <td><?php echo $data['bg'];?></td>
                    <td><?php echo $data['gender'];?></td>
                    <td><?php echo $data['caste'];?></td>
                    <td><?php echo $data['cadd'];?></td>
                    <td><?php echo $data['cpin'];?></td>
                    <td><?php echo $data['cstate'];?></td>
                    <td><?php echo $data['ccoun'];?></td>
                    <td><a href="updateform.php?sid=<?php echo $data['pid'];?>" style="text-color:blue">Edit</a></td>




                </tr>


                <?php
            }
        }
    }



?>
</table>
</div>
</html>



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
    padding-left: 10px;
}
</style>