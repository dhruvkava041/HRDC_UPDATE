<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Scheduling Event</title>
   <link rel="icon" href="titlelogo.png" type="image/x-icon">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="title">Scheduling Event</div>
  <form method="POST">
    <div class="user-details">
    
      
  <div class="input-box">
        <span class="details">Enter the Acadamic year</span>
         <select name="acadamicYear">  
        <option value="">--- Select The Acadamic Year ---</option>  
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
        <span class="details">Enter Event Name</span>
         <input type="text" name="Eventname"  placeholder="Enter the event Name "required> 
      </div>
      
    
    <div class="input-box">
        <span class="details">Maximum Number of attendees</span>
        <input type="Number" name="maximumnumberofattendees"  min="0" required> 
      </div>


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
    
      <div class="input-box1">
        <span class="details">Event Details</span>
        <input type="text" name="eventdetails"  required> 
      </div>
    </div>


    <div class="event-type">
      <input type="radio" name="eventtype" value="teaching" id="dot-1">
      <input type="radio" name="eventtype" value="Non-teaching" id="dot-2">
      <input type="radio" name="eventtype" value="All" id="dot-3">

      <span class="event-type-title">Event-type</span>
      <div class="category">
        
        <label for="dot-1">
          <span class="dot one"></span>
          <span class="event-type">teaching</span>
        </label>

        <label for="dot-2">
          <span class="dot two"></span>
          <span class="event-type">Non-teaching</span>
        </label>

        <label for="dot-3">
          <span class="dot three"></span>
          <span class="event-type">All</span>
        </label>

      </div>
    </div>


     <div class="event-mode">
      <input type="radio" name="eventmode" value="online" id="dot-4">
      <input type="radio" name="eventmode" value="Offline" id="dot-5">

      <span class="event-mode-title">Event-Mode</span>
      <div class="category1">
        
        <label for="dot-4">
          <span class="dot four"></span>
          <span class="event-mode">Online</span>
        </label>

        <label for="dot-5">
          <span class="dot five"></span>
          <span class="event-mode">Offline</span>
        </label>

      </div>
    </div>

    <div class="button">
      <input type="submit" name="save" value="Schedule Event" >
   

      <input type="reset" name="save1" value="Reset">
   </div>

  </form>
</div>   
      

<?php
    include 'server.php';
    $conn= OpenCon();     

if(isset($_POST['save']))
{   
     $acadamicYear=$_POST['acadamicYear'];
    $Eventname=$_POST['Eventname'];
    $maxnumberofattendees=$_POST['maximumnumberofattendees'];
    $eventdays=$_POST['eventdays'];
    $eventtodate=$_POST['eventtodate'];
    $eventfromdate=$_POST['eventfromdate'];
    $eventdetails=$_POST['eventdetails'];
    $eventtype=$_POST['eventtype'];
    $eventmode=$_POST['eventmode'];


    date_default_timezone_set('Asia/Kolkata');
    $cdate=date("d-m-y h:i:sa");

    $query = "INSERT INTO schedule_event(createdDate,academicYear,eventName,noOfAttendees,eventsDays,  eventToDate,eventFromDate,eventDetails,eventType,eventMode)
    VALUES ('$cdate','$acadamicYear','$Eventname','$maxnumberofattendees','$eventdays','$eventtodate',
    '$eventfromdate','$eventdetails','$eventtype',' $eventmode')";
    if(mysqli_query($conn,$query))
                    {  
                       echo "<script>alert('Inserted');window.location.assign('popupscreen.html');</script>";
                       
                    }
                    else{
                        //echo mysqli_error($conn);
                       
                     echo "<script>alert('can not be inserted');
                     window.location.assign('scheduling_event.php');</script>";

                    }
}


?>
</body>
</html>