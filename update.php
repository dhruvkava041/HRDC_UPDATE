<?php

$db = mysqli_connect("localhost","root","","hrdc1");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

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


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Batchwise Nomination</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
  <div class="title">Batchwise Nomination</div>
  <form action="" method="POST">
    <div class="user-details">
      
   
       <div class="input-box">
        <span class="details">Event Name</span>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `Event Name` from scheduling_event ");
        ?>
        <select name="eventname">
        <option ><?php echo "$en" ?></option>
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                    $eventname = $rows['Event Name'];
                    echo "<option value='$eventname'>$eventname</option>";
                }
            ?>
        </select>
      </div>


      <div class="input-box">
        <span class="details">Subevent Name</span>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `Subevent Name`,`Event Name` from scheduling_event");
        ?>
        <select name="subeventname">
        <option ><?php echo "$sen" ?></option>
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                    $subeventname = $rows['Subevent Name'];
                    $eventname = $rows['Event Name'];
                    echo "<option value='$subeventname'>$subeventname [ Event : $eventname ]</option>";
                }
            ?>
        </select>
      </div>

       <div class="input-box">
        <span class="details">Employee ID</span>
        <input type="text" value="<?php echo "$ei" ?>" name="employeeid" placeholder="Enter your Id" required> 
      </div>

       <div class="input-box">
        <span class="details">Name of Participant</span>
        <input type="text" value="<?php echo "$np" ?>" name="nameofparticipant" placeholder="Enter your Name" required> 
      </div>  


      <div class="input-box">
        <span class="details">Functional Department</span>
        <select name="functionaldepartment">  
        <option ><?php echo "$fd" ?></option>  
          <option value="CSPIT-CE">CSPIT-CE</option>  
          <option value="CSPIT-IT">CSPIT-IT</option>  
          <option value="CSPIT-EC">CSPIT-EC</option>  
          <option value="CSPIT-EE">CSPIT-EE</option>  
          <option value="CSPIT-CL">CSPIT-CL</option>  
          <option value="CSPIT-ME">CSPIT-ME</option>
          <option value="DEPSTAR-CE">DEPSTAR-CE</option>
          <option value="DEPSTAR-CSE">DEPSTAR-CSE</option>
          <option value="DEPSTAR-IT">DEPSTAR-IT</option>  
        </select>
      </div>
    
     
       
       <div class="input-box">
        <span class="details">Designation</span>
       <input type="text" value="<?php echo "$dd" ?>" name="designation" placeholder="Enter Designation" required> 
      </div>
      
      
      

       <div class="input-box">
        <span class="details">Mobile Number</span>
        <input type="Number" value="<?php echo "$mn" ?>" name="mobilenumber" placeholder="Enter your Mobile Number" required> 
      </div>
      
             <div class="input-box">
        <span class="details">Email Id</span>
        <input type="Email" value="<?php echo "$emi" ?>" name="emailid" placeholder="Enter event Email Id" required> 
      </div>
      

       <div class="input-box">
        <span class="details">Select Batch</span>  
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `Event Batch No` from scheduling_event");
        ?>
        <select name="selectbatch">
        <option ><?php echo "$sb" ?></option>
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                    $selectbatch = $rows['Event Batch No'];
                    echo "<option value='$selectbatch'>$selectbatch</option>";
                }
            ?>
        </select>
      </div>

      <div class="input-box">
        <span class="details">Select slot</span>
        <select name="selectslot"> 
        <option ><?php echo "$ss" ?></option> 
          <option value="Morning">Morning</option>  
          <option value="Afternoon">Afternoon</option>   
        </select>
      </div>

 <div class="input-box">
        <span class="details">Report Authority</span>
        <select name="reportauthority">  
        <option ><?php echo "$ra" ?></option> 
          <option value="Dr.ritesh patel">Dr.ritesh patel</option>  
          <option value="Dr.Parth Shah">Dr.Parth Shah</option>  
          <option value="Dr.Trushit Upadhyay">Dr.Trushit Upadhyay</option>  
        </select>
      </div>

    </div>


    <div class="button">
      <input type="submit" name="save" value="Update Details">
     
   </div>
  </form>
</div>   
      


</body>
</html>

<?php

$conn = mysqli_connect('localhost','root','','hrdc1');

if(isset($_POST['save']))
{
    $eventname = $_POST['eventname'];
    $subeventname = $_POST['subeventname'];
    $employeeid = $_POST['employeeid'];
    $nameofparticipant = $_POST['nameofparticipant'];
    $functionaldepartment = $_POST['functionaldepartment'];
    $designation = $_POST['designation'];
    $mobilenumber = $_POST['mobilenumber'];
    $emailid = $_POST['emailid'];
    $selectbatch = $_POST['selectbatch'];
    $selectslot = $_POST['selectslot'];
    $reportauthority = $_POST['reportauthority'];

    $query = "UPDATE batchwise_nomination SET `Event Name`='$eventname',`Subevent Name`='$subeventname',`Employee ID`='$employeeid',`Name of Participant`='$nameofparticipant',`Functional Department`='$functionaldepartment',`Designation`='$designation',`Mobile Number`='$mobilenumber',`Email Id`='$emailid',`Select Batch` ='$selectbatch', `Select slot`='$selectslot', `Report Authority`='$reportauthority' where `Employee ID`='$employeeid' and `Designation`='$designation' and `Email Id`='$emailid'";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Record Updated...')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/HRDC%20designs/Participants%20details.php">
        <?php
    }
    else{
        echo "Failed to record";
    }
}
?>