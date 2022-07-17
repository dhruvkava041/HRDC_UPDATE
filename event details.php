<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Event Details</title>
  <meta charset="utf-8">
  <link rel="icon" href="titlelogo.png" type="image/x-icon">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="title">Event Details</div>
  <form action="pdf2.php" method="POST">
    <div class="user-details">  
    <div class="input-box">
        <span class="details">Event Name</span>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `eventName` from schedule_event ");
        ?>
        <select name="eventname" id="eventname">
        <option selected disabled>--- Select event name---</option>
            <?php
                while($rows = $resultSet->fetch_assoc())
                {
                    $eventname = $rows['eventName'];
                    echo "<option value='$eventname'>$eventname</option>";
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

      $(document).ready(function(){
      $("#eventname").on('change',function(e){
        
        var eventname= $("#eventname").val(); 
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
        <span class="details">Subevent Name</span>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

   $resultSet = $mysqli->query("SELECT DISTINCT `subevent_name` from subevent");
        ?>
        <select name="subeventname" id="subeventname" required>
        <option selected disabled>--- Select subevent---</option>
            
        </select>
      </div>


 <div class="input-box">
        <span class="details">Enter the Acadamic year</span>
         <select name="Acadamic Year">  
        <option selected disabled>--- Select The Acadamic Year ---</option>  
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



  	
</div>
	
  <div class="button">
    <input type="submit" name="search" value="search">
    
  </div>

</p>
</form>
</div>       
</body>
</html>

</p>
</form>
</div>       
</body>
</html>