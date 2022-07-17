
<!DOCTYPE html>
<html>
<head>

<style>

select{
  text-align: center;
 }
 .image{
  text-align: center;
  width: 500px;
  height: 350px;

 }
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" ></script>
<script src="script.js"></script>
</head>
  <body >
    <div >

      <div 
       style="width: 550px;
          border: 10px solid brown;
          padding: 50px;
          margin: auto; text-align: left;
          border-radius: 20px;  
          background-color:rgb(196, 164, 132); 

          background-repeat: no-repeat;
          background-size:650px 350px;" 
          id="invoice"> 


         <img src="charusatlogo.png" width="200" height="50">
         <img src="hrdclogo.png" width="140" height="50" style="float: right;" >
         <hr>

        <div style="text-align: center;">
	  <h1>certificate of participation</h1>
	    </div>

	 <!-- <div>
      <?php

        //$mysqli = NEW MySQLi('localhost','root','','hrdc');

        //$resultSet = $mysqli->query("SELECT DISTINCT `Event Name` from scheduling_event ");
          ?>
        
	     <p>this is to certifite that mr/ms <input type="text" name="name"><br>
	    has participlte in <select name="eventname">
        <option value="">Select</option>
            <?php  
            
               // while($rows = $resultSet->fetch_assoc())
                {
                    // $eventname = $rows['Event Name'];
                    //$value = "<option value='$eventname'>$eventname</option>";
                    //$value=$eventname;
                    //echo "<option value='$eventname'>$eventname</option>" ;
                   // echo $value;
                }
            ?> 
        </select> one day faculty development program under the gaidlince of 
      <?php

        //$mysqli = NEW MySQLi('localhost','root','','hrdc');

        //$resultSet = $mysqli->query("SELECT DISTINCT `Enter the expert Name` from scheduling_event ");
          ?>
          <select name="eventname">
        <option value="">Select</option>
            <?php  
            
               // while($rows = $resultSet->fetch_assoc())
                {
                    // $eventname = $rows['Enter the expert Name'];
                    //$value = "<option value='$eventname'>$eventname</option>";
                    //$value=$eventname;
                    //echo "<option value='$eventname'>$eventname</option>" ;
                   // echo $value;
                }
            ?> 
             </select>-->
             <p><b><i>This is to certifite that mr/ms <input type="text" name="name" placeholder="ENTER THE NAME" size="30" style="font-style: italic; font-weight: bold; background-color: rgb(196, 164, 132); border: none; 
border-width: 0; 
box-shadow: none;"><br>
      has participlte in the 01 Day Faculty Development programe under the theme<br>
     
     <?php

        $mysqli = NEW MySQLi('localhost','root','','hrdc1');

        $resultSet = $mysqli->query("SELECT DISTINCT `eventName` from schedule_event ");
          ?>
          <select name="eventname" style="font-style: oblique; font-weight: bold; background-color: rgb(196, 164, 132); border: none; 
border-width: 0; 
box-shadow: none;">
        <option value="" >Select</option>
            <?php  
            
                while($rows = $resultSet->fetch_assoc())
                {
                    $eventname = $rows['eventName'];
                    $value = "<option value='$eventname'>$eventname</option>";
                    $value=$eventname;
                    echo "<option value='$eventname'>$eventname</option>" ;
                    echo $value;
                }
            ?> 
        </select> organized by Pri. B . J Patel Human Resource Development Centre on <input type="date" id="date" name="date" style="font-style: oblique; font-weight: bold; background-color: rgb(196, 164, 132); border: none; 
border-width: 0; 
box-shadow: none;"> to  <input type="date" id="date" name="date" style="font-style: oblique; font-weight: bold; background-color: rgb(196, 164, 132); border: none; 
border-width: 0; 
box-shadow: none;"> and has obtained"
           <label for=" grade"></label>
<select name=" grade" id=" grade" style="font-style: oblique; font-weight: bold; background-color: rgb(196, 164, 132); border: none; 
border-width: 0; 
box-shadow: none;">
  <option value="">Select</option>
  <option value="volvo">A</option>
  <option value="saab">B</option>
  <option value="mercedes">C</option>
  <option value="audi">D</option>
</select>".</i></b></p>
<br>
<br>
<br>
<br>
<img  class="image" src="backlogon.jpg" >
	  </div>
    
	  </div>

  </div>
  <div>
  </div>
    <div>
    <button onclick="generatePDF()">download</button>
    </div>
  </body>

</html>
