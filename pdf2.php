

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Event Details</title>
  <meta charset="utf-8">
  <link rel="icon" href="titlelogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style6.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
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
  <div class="title">Event Details</div>
  <form action="" method="POST">
    
   

  <button class="btn btn-primary " type="button" id="btnExport" name="btnExport" value="create pdf">Create pdf</button>



    <div class="table">
		<table id="tblCustomers" class="table table-bordered  table-striped">

             <tr>
                <th colspan ="12"><h1>Charusat university</h1></th>
            </tr>

                        <tr>
                        <th>No</th>
                        <th>Event Name</th>
                        <th>Subevent Name</th>
                        <th>Event to date</th>
                        <th>Event from date</th>
                        <th>Number of attendees</th>
                        <th>Event Days</th>
                        <th>Expert Name</th>
                        <th>Event Details</th>
                        <th>action</th>
                        </tr>
                <?php  
                   include 'server.php';
                   $conn= OpenCon(); 
                    
                    if(isset($_POST['search']))
                    {
                        $eventname = $_POST['eventname'];
                        $subeventname = $_POST['subeventname'];
                    

                        $query = "SELECT * FROM `subevent` WHERE `subevent_name`='$subeventname'";
                        $query_run = mysqli_query($conn,$query);
                        $i = 0;
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                                <tr>
                                <td><?php $i++; echo $i;?></td>
                                    <td><?php echo $row['event_name']?></td>
                                    <td><?php echo $row['subevent_name']?></td>
                                    <td><?php echo $row['event_to_date']?></td>
                                    <td><?php echo $row['event_from_date']?></td>
                                    <td><?php echo $row['No_of_attendees']?></td>
                                    <td><?php echo $row['event_days']?></td>
                                    <td><?php echo $row['expert_name']?></td>
                                    <td><?php echo $row['event_details']?></td>
                                <td class="float-right"><a  class="btn btn-primary "  href = "update2.php?en=<?php echo $row['event_name'] ?> & sen=<?php echo $row['subevent_name'] ?>&etd=<?php echo $row['event_to_date'] ?>&efd=<?php echo $row['event_from_date'] ?>&mna=<?php echo $row['No_of_attendees'] ?>&ed=<?php echo $row['event_days'] ?>&ee=<?php echo $row['expert_name'] ?>&edd=<?php echo $row['event_details'] ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger delete" name="delete" id="<?php echo $row['subevent_id'] ?>"><i class="fa fa-trash"></i></a></td> 
                                </tr>
                            <?php
                        }
                    }
                    
                ?>   
                <?php
                if(isset($_POST['search1']))
                {
                    $eventname = $_POST['eventname'];
                    $subeventname = $_POST['subeventname'];
                    $expertname = $_POST['expertname'];

                    $query = "SELECT * FROM `schedule_event` WHERE `eventName`='$eventname'";
                    $query_run = mysqli_query($conn,$query);
                    $i = 0;
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                            <tr>
                            <td><?php $i++; echo $i;?></td>
                                <td><?php echo $row['eventName']?></td>
                                <td><?php echo $row['eventToDate']?></td>
                                <td><?php echo $row['eventFromDate']?></td>
                                <td><?php echo $row['noOfAttendees']?></td>
                                <td><?php echo $row['eventsDays']?></td>
                                <td><?php echo $row['eventDetails']?></td>
                                <td><?php echo $row['eventType']?></td>
                                 </tr>
                        <?php
                    }
                }



                ?>
        </table>
		
	</div>
	
  </form>

  <script type="text/javascript">
            
        $(document).on('click','.delete',function(){
      var cell = $(this).attr("id");
      //alert(cell);
          if(confirm("Are you sure want to delete event?"))
          {
          $.ajax({
          type : "POST",
          url : "backend.php",
         data : {sysId: cell, log2: 1},
          success:function(data){
            alert(data);
            //fetch_data();
           // location.reload();
          location.href = 'event details.php';
          }
          });
          }
   
    });
   </script> 
</div>  


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                            
                            
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("pdffile.pdf");
                }
            });
        });
    </script>

</body>
</html>
