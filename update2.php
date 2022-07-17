<?php

$db = mysqli_connect("localhost","root","","hrdc1");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$en = $_GET['en'];
$sen = $_GET['sen'];
$etd = $_GET['etd'];
$efd = $_GET['efd'];
$mna = $_GET['mna'];
$ed = $_GET['ed'];
$ebn = $_GET['ebn'];
$ee = $_GET['ee'];
$edd = $_GET['edd'];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Scheduling Event</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<div class="container">
  <div class="title">Scheduling Event</div>
  <form action="" method="POST">
    <div class="user-details">
    
      <div class="input-box">
        <span class="details">Event Name</span>
         <input type="text" value="<?php echo "$en" ?>" name="Eventname"  placeholder="Enter the event Name "required> 

      </div>
      

    <div class="subevent">
      <div class="input-box3">
        <span class="details">Enter subevent name</span>
        <input type="text" name="subeventname" value="<?php echo "$sen" ?>" placeholder="Enter Subevent Name" required>
      </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
 
      // allowed maximum input fields
      var max_input = 10;
 
      // initialize the counter for textbox
      var x = 1;
 
      // handle click event on Add More button
      $('.add-subeventbtn').click(function (e) {
        e.preventDefault();
        if (x < max_input) { // validate the condition
          x++; // increment the counter
          $('.subevent').append(`
            <div class="input-box3">
              <span class="details">Enter the subevent Name</span>
              <input type="text" name="subeventname[]" value="<?php echo "$sen" ?>" placeholder="Enter subevent Name" required/>
              <a href="#" class="remove-lnk">Remove</a>
            </div>
          `); // add input field
        }
      });
 
      // handle click event of the remove link
      $('.subevent').on("click", ".remove-lnk", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();  // remove input field
        x--; // decrement the counter
      })
 
    });
  </script>
    
    <div class="input-box">
        <span class="details">Maximum Number of attendees</span>
        <input type="Number" value="<?php echo "$mna" ?>" name="maximumnumberofattendees"  required> 
      </div>


      

      <div class="batchno">
      <div class="input-box4">
        <span class="details">Event Batch </span>
        <input type="text" name="eventbatchno" value="<?php echo "$ebn" ?>" placeholder="Enter the batch name" required> 
      </div>
    </div>


<script type="text/javascript">
    $(document).ready(function () {
 
      // allowed maximum input fields
      var max_input = 10;
 
      // initialize the counter for textbox
      var x = 1;
 
      // handle click event on Add More button
      $('.add-batchnobtn').click(function (e) {
        e.preventDefault();
        if (x < max_input) { // validate the condition
          x++; // increment the counter
          $('.batchno').append(`
            <div class="input-box4">
              <span class="details">Event Batch Name</span>
              <input type="text" name="eventbatchno[]" value="<?php echo "$ebn" ?>" placeholder="Enter the batch name" required/>
              <a href="#" class="remove-lnk">Remove</a>
            </div>
          `); // add input field
        }
      });
 
      // handle click event of the remove link
      $('.batchno').on("click", ".remove-lnk", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();  // remove input field
        x--; // decrement the counter
      })
 
    });
  </script>
    


  <div class="input-box">
        <span class="details">Event Days</span>
        <input type="text" value="<?php echo "$ed" ?>" name="eventdays"  required> 
      </div>



       <div class="input-box">
        <span class="details">Event to date</span>
        <input type="date" value="<?php echo "$etd" ?>" name="eventtodate" required>
      </div>

       <div class="input-box">
        <span class="details">Event from date</span>
        <input type="date" value="<?php echo "$efd" ?>" name="eventfromdate" required>
      </div>

    <div class="wrapper">
      <div class="input-box2">
        <span class="details">Enter the expert Name</span>
        <input type="text" name="expertname" value="<?php echo "$ee" ?>" placeholder="Enter expert Name" required>
      </div>
</div>
  <script type="text/javascript">
    $(document).ready(function () {
 
      // allowed maximum input fields
      var max_input = 5;
 
      // initialize the counter for textbox
      var x = 1;
 
      // handle click event on Add More button
      $('.add-btn').click(function (e) {
        e.preventDefault();
        if (x < max_input) { // validate the condition
          x++; // increment the counter
          $('.wrapper').append(`
            <div class="input-box2">
              <span class="details">Enter the expert Name</span>
              <input type="text" name="expertname[]" value="<?php echo "$ee" ?>" placeholder="Enter expert Name" required/>
              <a href="#" class="remove-lnk">Remove</a>
            </div>
          `); // add input field
        }
      });
 
      // handle click event of the remove link
      $('.wrapper').on("click", ".remove-lnk", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();  // remove input field
        x--; // decrement the counter
      })
 
    });
  </script>
    

      <div class="input-box1">
        <span class="details">Event Details</span>
        <input type="text" value="<?php echo "$edd" ?>" name="eventdetails"  required> 
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
    $EventName =mysqli_real_escape_string($conn, $_POST['Eventname']) ;
    $SubeventName =$_POST['subeventname'];
    $MaximumNumberofattendance = $_POST['maximumnumberofattendees'];
    $EventDays = $_POST['eventdays'];
    $EventBatchNo =$_POST['eventbatchno'];
    $Eventtodate =mysqli_real_escape_string($conn, $_POST['eventtodate']);
    $Eventfromdate =mysqli_real_escape_string($conn, $_POST['eventfromdate']);
    $ExpertName =$_POST['expertname'];
    $EventDetails =mysqli_real_escape_string($conn, $_POST['eventdetails']);
   

    $query = "UPDATE schedule_event SET `event_name`='$EventName',`subevent_name`='$SubeventName',`No_of_attendees`='$MaximumNumberofattendance',`event_days`='$EventDays',`event_batch`='$EventBatchNo',`  event_to_date`='$Eventtodate',`event_from_date`='$Eventfromdate',`expert_name`='$ExpertName',`event_details`='$EventDetails' where `event_name`='$EventName'";

   
    // echo $query;
    
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('Record Updated')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/HRDC%20designs (updated)/event%20details.php">
        <?php
    }
    else{
      mysqli_error($conn);
        echo "<script>alert('not updated')</script>";
    }
}
?>