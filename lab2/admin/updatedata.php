<?php
	include('../dbcon.php');

        $username=$_POST['username'];
        $phone=$_POST['phone'];
        $regno=$_POST['regno'];
        $password=md5($_POST["password"]);
        $id=$_POST['sid'];
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



        $sql="UPDATE `personal_details` SET `username`='$username',`reg_no`='$regno',`password`='$password',`fname`='$fname',`mname`='$mname',`lname`='$lname',`gname`='$gname',`dob`='$dob',`age`='21',`email`='$email',`phone`='$phone',`bg`='$bg',`gender`='$gender',`caste`='$caste',`cadd`='$cadd',`cpin`='$cpin',`cstate`='$cstate',`ccoun`='$ccoun',`padd`='$padd',`ppin`='$ppin',`pstate`='$pstate',`pcoun`='$pcoun',`hobby`='$hobby',`hobbyextra`='$hobby4',`eac`='$eac' WHERE `pid`='$id'";

        $run=mysqli_query($conn, $sql);
        if($run==true)
        {
            ?>
            <script>
                alert('Data Updated Succesfully');
                window.open('updateform.php?sid=<?php echo $id;?>','_self');
            </script>
            <?php
        }

?>


?>