<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Batchwise Nomination</title>
  <meta charset="utf-8">
  <link rel = "icon" href = "titlelogo.png"  type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="title">Batchwise Nomination</div>
  <form action="" method="POST">
    <div class="user-details">
      

      <div class="input-box">
        <span class="details">Enter the Acadamic year</span>
         <select name="Acadamic Year">  
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
        <span class="details">Event Name</span>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `eventName` from schedule_event ");
        ?>
        <select name="eventname" id="eventname" required>
        <option value="">--- Select ---</option>
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                  $eventname = $rows['eventName'];
                  
                      echo "<option value='$eventname'>$eventname</option>";
                     
                    
                    
                }
            ?>
        </select>
      </div>



      <div class="input-box">
        <span class="details">Subevent Name</span>
        <?php
        /*$mysqli = NEW MySQLi('localhost','root','','hrdc1');

          $resultSet = $mysqli->query("SELECT DISTINCT `subevent_name` from subevent");*/
        ?>
        <select name="subeventname" id="subeventname" required>
        <option value="">--- Select ---</option>
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

      <script type="text/javascript">
    
      function defaultSubjectLoad(){
        var eventname= $("#eventname").val(); 
        
        $.ajax({
          type : "POST",
          url : "backend.php",
          data : {event: eventname, log1: 1},
          success:function(data){
            $("#subeventname").html(data);
          }
        });
      }

      //defaultSubjectLoad();

      $(document).ready(function(){
      $("#eventname").on('change',function(e){
        
        var eventname= $("#eventname").val(); 
        console.log(eventname);
        $.ajax({
          type : "POST",
          url : "backend.php",
          data : {event: eventname, log1: 1},
          success:function(data){
            $("#subeventname").html(data);
          }
        });
      });
    }); 

    </script>

      <div class="input-box">
        <span class="details">Functional Department</span>
        <select name="functionaldepartment">  
        <option value="">--- Select ---</option>  
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
        <span class="details">Employee ID</span>
        <input type="text" name="employeeid" placeholder="Enter your Id" required> 
      </div>

       <div class="input-box">
        <span class="details">Name of Participant</span>
        <input type="text" name="nameofparticipant" placeholder="Enter your Name" required> 
      </div>  

       
       <div class="input-box">
        <span class="details">Designation</span>
       <input type="text" name="designation" placeholder="Enter Designation" required> 
      </div>
      
       <div class="input-box">
        <span class="details">Mobile Number</span>
        <input type="Number" name="mobilenumber" placeholder="Enter your Mobile Number" min="0"  required> 
      </div>
      
             <div class="input-box">
        <span class="details">Email Id</span>
        <input type="Email" name="emailid" placeholder="Enter event Email Id" required> 
      </div>
      

       <div class="input-box">
        <span class="details">Select Batch</span>  
        <select name="selectbatch">
           <option value="">--- Select ---</option>  
          <option value="A">A</option>  
          <option value="B">B</option>  
          <option value="C">C</option>
            <option value="D">D</option> 
        </select>
      </div>

      <div class="input-box">
        <span class="details">Select slot</span>
        <select name="selectslot"> 
        <option value="">--- Select ---</option> 
          <option value="Morning">Morning</option>  
          <option value="Afternoon">Afternoon</option>   
        </select>
      </div>

 <div class="input-box">
        <span class="details">Report Authority</span>
        <select name="reportauthority">  
        <option value="">--- Select ---</option>  
          <option value="Dr.ritesh patel">Dr.ritesh patel</option>  
          <option value="Dr.Parth Shah">Dr.Parth Shah</option>  
          <option value="Dr.Trushit Upadhyay">Dr.Trushit Upadhyay</option>  
        </select>
      </div>

    </div>


    <div class="button">
      <input type="submit" name="save" value="save">
      <input type="reset" name="save1" value="Reset">
     
   </div>
  </form>
</div>   

      


</body>
</html>

<?php
if(isset($_POST["save1"]))
{
  header('Location:batchwise_Nomination.php');
} 
?>

<?php

$conn = mysqli_connect('localhost','root','','hrdc1');


if(isset($_POST['save']))
{   
    $eventname =mysqli_real_escape_string($conn, $_POST['eventname']) ;
    $subeventname =mysqli_real_escape_string($conn, $_POST['subeventname']);
    $employeeid = $_POST['employeeid'];
    $nameofparticipant = $_POST['nameofparticipant'];
    $functionaldepartment =mysqli_real_escape_string($conn, $_POST['functionaldepartment']);
    $designation =mysqli_real_escape_string($conn, $_POST['designation']);
    $mobilenumber =mysqli_real_escape_string($conn, $_POST['mobilenumber']);
    $emailid =$_POST['emailid'];
    $selectbatch =mysqli_real_escape_string($conn, $_POST['selectbatch']);
    $selectslot = $_POST['selectslot'];
    $reportauthority = $_POST['reportauthority'];
    
    $query = "INSERT INTO `batchwise_nomination`(`id`,`Event Name`,`Subevent Name`,`Employee ID`,`Name of Participant`,`Functional Department`,`Designation`,`Mobile Number`,`Email Id`,`Select Batch` , `Select slot`, `Report Authority`) VALUES('0','$eventname','$subeventname','$employeeid','$nameofparticipant','$functionaldepartment','$designation','$mobilenumber','$emailid','$selectbatch','$selectslot','$reportauthority')";
    
    $query_run = mysqli_query($conn,$query);
    
    if($query_run)
    {
      echo "<script>alert('Event Created...')</script>";
    }
      else{
      echo "nottttttttttttttttttttttttttttttttt";
    }
}
?>   