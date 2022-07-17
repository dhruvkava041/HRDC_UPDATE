<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <link rel="icon" href="titlelogo.png" type="image/x-icon">
    <meta charset="utf-8">
    <title> HRDC | Login </title>
    <link rel="stylesheet" href="loginstyle.css">
  </head>
  <body>
    <div class="center">
      <h1>Student Login</h1>
      <form name="f1" action=""  method="post">
        <div class="txt_field">
        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />

        </div>
        <div class="txt_field">
        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>

        </div>

      
        <input type="submit" value="Submit" name="but_submit" id="but_submit" />

           </form>
    </div>
    
  </body>
</html>


<?php 

session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "hrdc1"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['but_submit'])){

  $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
  $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

  if ($uname != "" && $password != ""){

      $sql_query = "select count(*) as cntUser from loginform where username='".$uname."' and password='".$password."'";
      $result = mysqli_query($con,$sql_query);
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['uname'] = $uname;
          header('Location: student dashboard.php');
      }else{
          echo "<script>alert('Invalid username and password')</script>";
      }

  }

}

?>