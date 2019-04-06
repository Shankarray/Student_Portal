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


<?php

			include('../dbcon.php');
			$id = $_GET['sid'];
			$sql = "UPDATE `personal_details` SET activate=1 WHERE pid='$id';";
    		$run = mysqli_query($conn,$sql);

            if($run==true)
        	{
            ?>
            <script>
                alert('Accepted Succesfully');
                window.open('request.php','_self');
            </script>
            <?php
        }

            ?>