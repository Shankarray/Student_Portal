<?php
	include('../dbcon.php');

        $id=$_REQUEST['sid'];
        $sql="DELETE FROM `personal_details` WHERE `pid`='$id';";

        $run=mysqli_query($conn, $sql);
        if($run==true)
        {
            ?>
            <script>
                alert('Data Deleted Succesfully');
                window.open('delete_student.php','_self');
            </script>
            <?php
        }

?>


?>