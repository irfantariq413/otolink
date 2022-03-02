<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<?php

require('connection.php');


if(isset($_POST['readrecord'])){
	echo '<table class="table table-bordered table-striped">
	<tr>
	<th>No</th>
	<th>Company Name</th>
	<th>Person Name</th>
	<th>Mobile</th>
	<th>Email</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
	';
	$display= "SELECT * from user";
	$res=mysqli_query($con,$display);
	if(mysqli_fetch_row($res)>0){
		$number=1;
		while($row=mysqli_fetch_assoc($res)){
			echo '<tr>
			<td>' .$number. '</td>
			<td>'.$row['c_name'].'</td>
			<td>'.$row['c_person'].'</td>
			<td>'.$row['number'].'</td>
			<td>'.$row['email'].'</td>
			<td><button onClick="getUserDetails('.$row['id'].')" class="btn btn-success">Edit</button></td>
			<td><button onClick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button></td>
			</tr>
			
			';
			$number++;
		}
	}
	echo '</table>';
}

if(isset($_POST['c_name']) && isset($_POST['c_person']) && isset($_POST['number']) && isset($_POST['email'])) {
	
	$firstname=$_POST['c_name'];
	$lastname=$_POST['c_person'];
	$mobile=$_POST['number'];
	$address=$_POST['email'];
	$qq="INSERT into user (c_name,c_person,number,email) values ('$firstname','$lastname','$mobile','$address')";
		mysqli_query($con,$qq);
}

if(isset($_POST['deleteid'])){
	
	$userid=$_POST['deleteid'];
	
	$delete= "DELETE from user where id='$userid'";
	mysqli_query($con,$delete);
}
	
	
if(isset($_POST['id']) && isset($_POST['id']) != ""){
	
	
	$updateid=$_POST['id'];
	
	$update= "SELECT * from user where id='$updateid'";
	
	if(!$result = mysqli_query($con,$update)){
		exit(mysqli_error());
	}
	
	$response=array();
	
	if(mysqli_num_rows($result) > 0 ){
		while($rows = mysqli_fetch_assoc($result)){
			$response=$rows;
		}
	}

	echo json_encode($response);	
}
	
if(isset($_POST['hidden_user_id'])){
	
	$hidden_user_id=$_POST['hidden_user_id'];
	$uc_name=$_POST['uc_name'];
	$uc_person=$_POST['uc_person'];
	$unumber=$_POST['unumber'];
	$uemail=$_POST['uemail'];
	
	$query= "UPDATE user set c_name='$uc_name', c_person='$uc_person', number='$unumber',email='$uemail' where id='$hidden_user_id'";
	mysqli_query($con,$query);
	
	
}
?>
</body>
</html>


