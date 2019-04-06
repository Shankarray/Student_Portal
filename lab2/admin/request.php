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
<title>RequestPage</title>
<header>
  <h1>
                Accept/Decline Student
            </h1>
        <h4>
            <a href="admin_dash.php" style="float:left";margin-right:30px; color:#fff; font-size:20px;>Back to dashboard</a>
        </h4>
</header>
</header>
    <div class="container">
    <table align="center">
</table>


<table align="center" width="98%" border="1" style="margin-top: 20px">
    <tr>
        <th>Sl No.</th>
        <th>Username</th>
        <th>Registration No.</th>
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
        include('../dbcon.php');
        $sql = "SELECT * FROM `personal_details` WHERE `activate`=0";
        $run = mysqli_query($conn,$sql);
        $newStudentData=mysqli_fetch_all($run);
        $qry="SELECT COUNT(pid) as total FROM `personal_details` WHERE `activate`=0";
        $run1= mysqli_query($conn,$qry);
        $dat=mysqli_fetch_assoc($run1);
        if($dat['total']==0)
        {
            echo "<tr><td colspan='16'>No New Entries Exist</td></tr>";
        }
        else
        {
            $count=0;
            foreach($newStudentData as $data){

                $count++;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $data[0];?></td>
                    <td><?php echo $data[2];?></td>
                    <td><?php echo $data[4]." ".$data[5]." ".$data[6]; ?></td>
                    <td><?php echo $data[7];?></td>
                    <td><?php echo $data[8];?></td>
                    <td><?php echo $data[10];?></td>
                    <td><?php echo $data[11];?></td>
                    <td><?php echo $data[12];?></td>
                    <td><?php echo $data[13];?></td>
                    <td><?php echo $data[14];?></td>
                    <td><?php echo $data[15];?></td>
                    <td><?php echo $data[16];?></td>
                    <td><?php echo $data[17];?></td>
                    <td><?php echo $data[18];?></td>
                    <td><a href="requestform.php?sid=<?php echo $data[1];?>" style="text-color:blue">Accept</a></td>




                </tr>
                <?php
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
