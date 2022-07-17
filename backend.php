<?php
    include 'server.php';
    $conn= OpenCon();  


    if (isset($_POST['log1'])){

	$event = $_POST["event"];
	// echo "<script>alert('Hello World! Welcome')</script>";
	$sql = "SELECT * FROM subevent WHERE event_name = '$event'";
	echo $sql;
	$result = mysqli_query($conn, $sql) or die("SQL query failed");
	$output= "";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$output .= "<option value='{$row["subevent_name"]}'>{$row["subevent_name"]}</option>";
		}
		echo $output;
	}
	else
	{
		echo "<option disabled>No Record Found</option>";
	}
}


if(isset($_POST['log2'])){
        
        $sysId = $_POST["sysId"];        
        $sql ="DELETE FROM SUBEVENT WHERE subevent_id = '$sysId'";
        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('deleted');</script>";
            
        }
        else
        { 
        	echo "<script>alert('cannot delete');</script>";
        }
    }

  ?>