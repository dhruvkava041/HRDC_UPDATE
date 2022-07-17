<?php
    include 'server.php';
    $conn= OpenCon();  

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Scheduling sub Event</title>
  <meta charset="utf-8">
  <link rel = "icon" href = "titlelogo.png"  type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="title">Scheduling sub Event</div>
  <form method="POST">
    <div class="user-details">
    
      <div class="input-box">
        <span class="details">Enter the Acadamic year</span>
         <select name="acadamicYear">  
        <option disabled selected>--- Select The Acadamic Year ---</option>  
          <option value="2020-21">2020-21</option> 
          <option value="2021-22">2021-22</option>  
          <option value="2022-23">2022-23</option>  
          <option value="2023-24">2023-24</option>  
          <option value="2024-25">2024-25</option>  
          <option value="2025-26">2025-26</option>  
          <option value="2026-27">2026-27</option>  
          <option value="2027-28">2027-28</option>  
          <option value="2028-29">2028-29</option>  
          <option value="2029-30">2029-30</option>  
       
        </select> 
      </div>
      

<div class="input-box">
        <span class="details">Event Name</span>
        <select name="eventName">  
        <option selected disabled>Select Event</option>
      <?php
                if($conn){

                  $qry="select * from schedule_event";
                  $log1=mysqli_query($conn,$qry);
                  while($r = mysqli_fetch_array($log1)){
                       echo '<option value="'.$r['eventName'].'">'.$r['eventName'].'</option>';
                     }
                   }

                
      ?>  
        </select>
      </div>



    <div class="input-box">
        <span class="details">Enter SubEvent Name</span>
         <input type="text" name="SubEventname"  placeholder="Enter the  Subevent Name "required> 
      </div>
      
    
    <div class="input-box">
        <span class="details">Maximum Number of attendees</span>
        <input type="Number" name="maximumnumberofattendees" min="0" required> 
      </div>


      

      <!-- <div class="batchno">
      <div class="input-box4">
        <span class="details">Event Batch Name</span>
        <input type="text" name="eventbatchno[]" placeholder="Enter the batch name" required> 
        <button class="btn add-batchnobtn">Add  </button>
      </div>
    </div> -->


<!-- <script type="text/javascript">
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
              <input type="text" name="eventbatchno[]" placeholder="Enter the batch name" required/>
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
  </script> -->
    


  <div class="input-box">
        <span class="details">Event Days</span>
        <input type="text" name="eventdays"  required> 
      </div>



       <div class="input-box">
        <span class="details">Event to date</span>
        <input type="date" name="eventtodate" required=>
      </div>

       <div class="input-box">
        <span class="details">Event from date</span>
        <input type="date" name="eventfromdate">
      </div>
      
    <div class="wrapper">
      <div class="input-box2">
        <span class="details">Enter the expert Name</span>
        <input type="text" name="expertname[]" value="" placeholder="Enter expert Name" required>
        <button class="btn add-btn">Add  </button>
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
              <input type="text" name="expertname[]" value="" placeholder="Enter expert Name" required/>
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
        <input type="text" name="eventdetails"  required> 
      </div>
    </div>


    

    <div class="button">
      <input type="submit" name="save" value="Schedule another SubEvent" >
      <input type="reset" name="save1" value="Reset">
   </div>

  </form>
</div> 




<?php
    
if(isset($_POST['save']))
{   
    $acadamicYear=$_POST['acadamicYear'];
    $Eventname=$_POST['eventName'];
    $SubEventname=$_POST['SubEventname'];
    $maxnumberofattendees=$_POST['maximumnumberofattendees'];


    $eventbatchno=$_POST['eventbatchno'];
    $batch="";
    foreach($eventbatchno as $batch1)  
    {  
      $batch .= $batch1." ";  
    }


    $eventdays=$_POST['eventdays'];
    $eventtodate=$_POST['eventtodate'];
    $eventfromdate=$_POST['eventfromdate'];


    $expertname=$_POST['expertname'];
    $expert="";
    foreach($expertname as $expert1)  
    {  
      $expert .= $expert1." ,";  
    }

    $eventdetails=$_POST['eventdetails'];


    date_default_timezone_set('Asia/Kolkata');
    $cdate=date("d-m-y h:i:sa");

    $query = "INSERT INTO subevent(academicYear,event_name,subevent_name,No_of_attendees,event_batch,   event_days,event_to_date,event_from_date,expert_name,event_details)
    VALUES ('$acadamicYear','$Eventname','$SubEventname','$maxnumberofattendees','$batch','$eventdays','$eventtodate','$eventfromdate','$expert','$eventdetails')";
    if(mysqli_query($conn,$query))
                    {  
                       echo "<script>alert('Inserted');window.location.assign('popupscreen.html');</script>";
                       
                    }
                    else{
                        // echo mysqli_error($conn);
                       
                     echo "<script>alert('can not be inserted');
                     window.location.assign('scheduling_subevent.php');</script>";

                    }
}


?>  
      


</body>
</html>