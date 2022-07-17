<?php
$conn = mysqli_connect('localhost','root','','hrdc1');
error_reporting(0);

$en = $_GET['en'];
$sen = $_GET['sen'];
$etd = $_GET['etd'];
$efd = $_GET['efd'];
$mna = $_GET['mna'];
$ed = $_GET['ed'];
$ebn = $_GET['ebn'];
$ee = $_GET['ee'];
$edd = $_GET['edd'];
$et = $_GET['et'];

$query = "DELETE  from scheduling_event where `Event Name`='$en' and `Subevent Name`='$sen' and `Maximum Number of attendees`='$mna' and `Event Days`='$ed' and `Event Batch No`='$ebn' and `Event to date`='$etd' and `Event from date`='$efd' and `Enter the expert Name`='$ee' and `Event Details`='$edd' and `Event-type`='$et'";

$del = mysqli_query($conn,$query);

if($del)
{
    echo "<script>alert('Record Deleted...')</script>";
    ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/HRDC%20designs/event%20details.php">
        <?php    	
}
else
{
    echo "Failed to Delete";
}

?>