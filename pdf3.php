

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Attendence Details</title>
  <meta charset="utf-8">
  <link rel="icon" href="titlelogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style7.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<style type="text/css">
  .button {
    height: 100%;
	width: 20%;
  padding: 10px 15px;
  text-align: center;
	outline: none;
	color: #fff;
	border :none;
	font-size: 18px;
	font-weight: 500;
	border-radius: 5px;
	letter-spacing: 1px;

	background: linear-gradient(135deg, #17a2b8, #17a2b8);
   
}
</style>


</head>
<body>


<div class="container">
  <div class="title">Attendence Details</div>
  <form action="" method="POST">
    
  <?php

$conn = mysqli_connect("localhost","root","","hrdc1");

if(isset($_POST['save']))
{
  
  $eventname = $_POST['eventname'];
  $subeventname = $_POST['subeventname'];
  $batchnumber = $_POST['batchnumber'];
  $date = $_POST['date']; 

  $query1 = "SELECT `Name of Participant` FROM `batchwise_nomination` inner join `scheduling_event` on scheduling_event.`Event Name` = batchwise_nomination.`Event Name` where scheduling_event.`Event Name`='$eventname' or scheduling_event.`Subevent Name`='$subeventname' or scheduling_event.`Event Batch No`='$batchnumber' or '$date' between scheduling_event.`Event to date` and scheduling_event.`Event from date`";
  $query_run1 = mysqli_query($conn,$query1);

  while($row = mysqli_fetch_array($query_run1))
  {
    $ab = $row['Name of Participant'];
    echo $ab;
  }

  $check = $_POST['check'];
  $chkstr = implode(" ,",$check);

  $query = "INSERT INTO `attendence`(`name of participant`,`attendence`) VALUES('$ab','$chkstr')";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    echo "<script>alert('Attendence Recorded...')</script>";
    ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; ">
        <?php  
  }
  else
  {
    echo "not inserted";
  }

}

?>

  


    <div class="table">
		<table id="tblCustomers" class="table table-bordered  table-striped">

                                
                <?php  
                    $conn = mysqli_connect("localhost","root","","hrdc1");

                    if(!$conn)
                    {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    if(isset($_POST['search']))
                    {
                        $eventname = $_POST['eventname'];
                        $subeventname = $_POST['subeventname'];
                        $batchnumber = $_POST['batchnumber'];
                        $date = $_POST['date'];   
                        ?>
                        <tr>
                            <th>No</th>
                            <th>Name of Participants</th>

                            <?php
                            $eventname = $_POST['eventname'];
                            $subeventname = $_POST['subeventname'];
                            $batchnumber = $_POST['batchnumber'];
                            $date = $_POST['date']; 
                            $conn = mysqli_connect("localhost","root","","hrdc1");
                            $r = mysqli_query($conn,"SELECT TIMESTAMPDIFF(DAY,`eventToDate`,`eventFromDate`) as abc FROM `schedule_event` where schedule_event.`eventName`='$eventname' or '$date' between schedule_event.`eventToDate` and schedule_event.`eventFromDate` ");
                                
                                while($row = mysqli_fetch_array($r))
                                {
                                  $i=0;
                                  
                                  while($i<=$row['abc'])
                                  {
                                    ?><th><?php echo 'Day'.($i+1); ?></th><?php
                                    $i++;    
                                  }
                                
                                
                            }?>


                                                            
                        </tr>
<?php

                        $query = "SELECT * FROM `batchwise_nomination` inner join `schedule_event` on schedule_event.`eventName` = batchwise_nomination.`Event Name` where schedule_event.`eventName`='$eventname' or '$date' between schedule_event.`eventToDate` and schedule_event.`eventFromDate`";
                        $query_run = mysqli_query($conn,$query);
                        $i = 0;
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                                <tr>
                                <td><?php $i++; echo $i;?></td>
                                <td><?php echo $row['Name of Participant']?></td>
                                <?php
                                $eventname = $_POST['eventname'];
                                $subeventname = $_POST['subeventname'];
                                $batchnumber = $_POST['batchnumber'];
                                $date = $_POST['date']; 
                                $conn = mysqli_connect("localhost","root","","hrdc1");

                                $r = mysqli_query($conn,"SELECT TIMESTAMPDIFF(DAY,`eventToDate`,`eventFromDate`) as abc FROM `schedule_event` where schedule_event.`eventName`='$eventname' or '$date' between schedule_event.`eventToDate` and schedule_event.`eventFromDate` ");
                               
                                while($row = mysqli_fetch_array($r))
                                {
                                  $i=0;
                                  while($i<=$row['abc'])
                                  {
                                    ?><th><input type="checkbox" value="<?php echo 'Day'.($i+1).'-Present' ?>" name="check[]"></th><?php  
                                    $i++;  
                                  }
                                
                                
                            }?>
                                
                                
                                                                                                                        
                                
                                </tr>
                                <input class="btn btn-primary " type="submit" id="save" name="save" value="SAVE" style="background: linear-gradient(135deg, #17a2b8, #17a2b8);
  height: 100%;
	width: 25%;
	outline: none;
	color: #fff;
	border :none;
	font-size: 18px;
	font-weight: 500;
	border-radius: 5px;
	letter-spacing: 1px;">
                            <?php
                        }
                    }
                ?>  
                
        </table>
       
        
        
                  
	</div>
	
  </form>
</div>  



</body>
</html>

