<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Participants Details</title>
  <meta charset="utf-8">
  <link rel="icon" href="titlelogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style3.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="container">
  <div class="title">Participants Details</div>
  <form action="pdf.php" method="POST">
    <p>
  <div class="user-details">
      
      <div class="input-box">
        <span class="details">Batch</span>
<!--         <input type="text" name="batchno" placeholder="Enter Batch Name" >  -->
        <select name="batchno" required>
           <option value="">--- Select ---</option>  
          <option value="A">A</option>  
          <option value="B">B</option>  
          <option value="C">C</option>
            <option value="D">D</option> 
        </select>
      </div>
    
    <div class="input-box">
        <span class="details">Participant Name</span>
        <input type="text" name="participantname" placeholder="Enter Participant Name" > 
      </div>
    
     <div class="input-box">
        <span class="details">Employee ID</span>
        <input type="text" name="employeeid" placeholder="Enter id"> 
      </div>
    
  </div>
  
     <div class="button">
      <input type="submit" name="search" value="search">
      
      <input type="submit" name="search1" value="Show Rows">
   
    </div>
   

    
  </p>
  </form>
</div>  


  
</body>
</html>