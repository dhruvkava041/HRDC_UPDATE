<?php
$conn = mysqli_connect('localhost','root','','hrdc1');
error_reporting(0);

$np = $_GET['np'];
$fd = $_GET['fd'];
$en = $_GET['en'];
$sen = $_GET['sen'];
$ei = $_GET['ei'];
$mn = $_GET['mn'];
$emi = $_GET['emi'];
$sb = $_GET['sb'];
$ss = $_GET['ss'];
$ra = $_GET['ra'];
$dd = $_GET['dd'];

$query = "DELETE  from batchwise_nomination where `Event Name`='$en' and `Subevent Name`='$sen' and `Employee ID`='$ei' and `Name of Participant`='$np' and `Functional Department`='$fd' and `Designation`='$dd' and `Mobile Number`='$mn' and `Email Id`='$emi' and `Select Batch` ='$sb' and  `Select slot`='$ss' and  `Report Authority`='$ra'";

$del = mysqli_query($conn,$query);

if($del)
{
    echo "<script>alert('Record Deleted...')</script>";
    ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/HRDC%20designs/Participants%20details.php">
        <?php    	
}
else
{
    echo "Failed to Delete";
}

?>