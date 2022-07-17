
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <title>Participants Details</title>
  <meta charset="utf-8">
  <link rel="icon" href="titlelogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style6.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  
<style type="text/css">
  .button {
    height: 100%;
	width: 13%;
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
  <div class="title">Participants Details</div>
  <form action="" method="POST">
    
  
  <button class="btn btn-primary " type="button" id="btnExport" name="btnExport" value="create pdf">Create pdf</button>


    <div class="table">
		<table id="tblCustomers" class="table table-bordered  table-striped">
                        <tr>
                            <th>No</th>
                            <th>Name of participant</th>
                            <th>Department</th>
                            <th>Event Name</th>
                            <th>Subevent Name</th>
                            <th>Employee ID</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Batch</th>
                            <th>slot</th>
                            <th>Authority</th>
                            <th>action</th>
                        </tr>
                <?php  
                   $conn = mysqli_connect("localhost","root","","hrdc1");

                   if(!$conn)
                   {
                       die("Connection failed: " . mysqli_connect_error());
                   }
                   
                    
                    if(isset($_POST['search']))
                    {
                        $batchno = $_POST['batchno'];
                        $participantname = $_POST['participantname'];
                        $employeeid = $_POST['employeeid'];

                        $query = "SELECT * FROM `batchwise_nomination` WHERE `Select Batch`='$batchno' or `Name of Participant`='$participantname' or `Employee ID`='$employeeid'";
                        $query_run = mysqli_query($conn,$query);
                        $i = 0;
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                                <tr>
                                    <td><?php $i++; echo $i;?></td>
                                    <td><?php echo $row['Name of Participant']?></td>
                                    <td><?php echo $row['Functional Department']?></td>
                                    <td><?php echo $row['Event Name']?></td>
                                    <td><?php echo $row['Subevent Name']?></td>
                                    <td><?php echo $row['Employee ID']?></td>
                                    <td><?php echo $row['Mobile Number']?></td>
                                    <td><?php echo $row['Email Id']?></td>
                                    <td><?php echo $row['Select Batch']?></td>
                                    <td><?php echo $row['Select slot']?></td>
                                    <td><?php echo $row['Report Authority']?></td>
                                    <td class="float-right"><a  class="btn btn-primary "  href = "update.php?np=<?php echo $row['Name of Participant'] ?> & fd=<?php echo $row['Functional Department'] ?>&en=<?php echo $row['Event Name'] ?>&sen=<?php echo $row['Subevent Name'] ?>&ei=<?php echo $row['Employee ID'] ?>&mn=<?php echo $row['Mobile Number'] ?>&emi=<?php echo $row['Email Id'] ?>&sb=<?php echo $row['Select Batch'] ?>&ss=<?php echo $row['Select slot'] ?>&ra=<?php echo $row['Report Authority'] ?>&dd=<?php echo $row['Designation'] ?>"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger " href = "delete.php?np=<?php echo $row['Name of Participant'] ?> & fd=<?php echo $row['Functional Department'] ?>&en=<?php echo $row['Event Name'] ?>&sen=<?php echo $row['Subevent Name'] ?>&ei=<?php echo $row['Employee ID'] ?>&mn=<?php echo $row['Mobile Number'] ?>&emi=<?php echo $row['Email Id'] ?>&sb=<?php echo $row['Select Batch'] ?>&ss=<?php echo $row['Select slot'] ?>&ra=<?php echo $row['Report Authority'] ?>&dd=<?php echo $row['Designation'] ?>" onclick = "return checkdelete()"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php
                        }
                    }
                ?>   
                <?php
                  if(isset($_POST['search1']))
                  {
                      $batchno = $_POST['batchno'];
                      $participantname = $_POST['participantname'];
                      $employeeid = $_POST['employeeid'];

                      $query = "SELECT * FROM `batchwise_nomination` WHERE `Select Batch`='$batchno' or `Name of Participant`='$participantname' or `Employee ID`='$employeeid'";
                      $query_run = mysqli_query($conn,$query);
                      $i = 0;
                      while($row = mysqli_fetch_array($query_run))
                      {
                          ?>
                              <tr>
                                  <td><?php $i++; echo $i;?></td>
                                  <td><?php echo $row['Name of Participant']?></td>
                                  <td><?php echo $row['Functional Department']?></td>
                                  <td><?php echo $row['Event Name']?></td>
                                  <td><?php echo $row['Subevent Name']?></td>
                                  <td><?php echo $row['Employee ID']?></td>
                                  <td><?php echo $row['Mobile Number']?></td>
                                  <td><?php echo $row['Email Id']?></td>
                                  <td><?php echo $row['Select Batch']?></td>
                                  <td><?php echo $row['Select slot']?></td>
                                  <td><?php echo $row['Report Authority']?></td>
                                   </tr>
                          <?php
                      }
                  }
                ?>
        </table>
        <script>
        function checkdelete()
        {
        return confirm("Are you sure you want to delete this Record");
        }
        </script>
	</div>
</form>
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
