
<?php
  /*session_start();
  if($_SESSION['uid'])
  {
    header('location:admin_dash.php');
  }*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header" align="center">
        <h2>Admin Login</h2>
    </div>
<form method="post" action="admin_login.php">
  <table align="center">
    <tr>
      <td>Username</td><td><input type="text" name="uname" required</td>
    </tr>
    <tr>
      <td>Password</td><td><input type="password" name="pwd" required</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="admin_login" value="login"</td>
    </tr>

  </table>

</form>
</body>
</html>


<?php
include('../dbcon.php');

if(isset($_POST['admin_login']))
{
  $username = $_POST['uname'];
  $password = $_POST['pwd'];

  $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`= '$password'";
  $run = mysqli_query($conn,$qry);
  $row = mysqli_num_rows($run);
  if($row < 1)
  {
    ?>
    <script>
      alert('Username and Password not match !!');
      window.open('admin_login.php','_self');
    </script>
    <?php
  }
  else
  {
    $data=mysqli_fetch_assoc($run);

    $id =$data['id'];
    echo "id=".$id;

    $_SESSION['uid']=$id;
    header('location:admin_dash.php');


  }

}

?>