<?php

$conn = mysqli_connect("localhost","root","","hrdc1");

if(isset($_POST['save']))
{
  $eventname = $_POST['eventname'];
  $subeventname = $_POST['subeventname'];
  $batchnumber = $_POST['batchnumber'];
  $date = $_POST['date']; 

  $query1 = "SELECT * FROM `batchwise_nomination` inner join `scheduling_event` on scheduling_event.`Event Name` = batchwise_nomination.`Event Name` where scheduling_event.`Event Name`='$eventname' or scheduling_event.`Subevent Name`='$subeventname' or scheduling_event.`Event Batch No`='$batchnumber' or '$date' between scheduling_event.`Event to date` and scheduling_event.`Event from date`";
  $query_run1 = mysqli_query($conn,$query1);

  while($row = mysqli_fetch_array($query_run1))
  {
    $ab = $row['Name of Participant'];
    $query = "INSERT INTO `attendence`(`name of participant`)  VALUES('$ab')";
  }

  $check = $_POST['check'];
  $chkstr = implode(" ,",$check);

  $query = "INSERT INTO `attendence`(`attendence`) VALUES('$chkstr')";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    echo "<script>alert('Attendence Recorded...')</script>";
    ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/HRDC%20designs/attendence%20details.php">
        <?php  
  }
  else
  {
    echo "not inserted";
    }

}

?>