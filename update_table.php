<?php  
//add database connection file
include ('dbcon.php');
$id=$_GET['id'];
$sql="SELECT * FROM oopinsert WHERE id='$id'";
$result=$conn->query($sql);
?>
<html>
	<title>komal-pixel CRUD Operation using OOp</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- like for editable rows -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tabledit.js"></script>
<body
<section>
	<div class="container">
		<div class="heading text-center">
			<h2>OOP Concept In PHP (CRUD Operation)</h2>	
			<h4>Update Opertaion</h4>	
		</div>
		<div class="form">
			<form class="form group" method="post" action="">
				<?php
						while($row=$result->fetch_assoc()){ 				
						echo'	<label>Name</label>
							<input class="input" type="text" name="name" value=" '.$row['name'].'"> <br>
							<label>Email</label>
							<input class=" email" type="text" name="email" value="'.$row['email'].'"> <br><br>	
							<button class="btn btn-info" name="save">submit</button>';
						  } ?>	
			</form>
		</div>	
	</div>
</section>
<?php
include('dbcon.php');
if(isset($_POST['save'])){
	$id=$_REQUEST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];

	$sql="UPDATE oopinsert SET name='$name', email= '$email' WHERE id='$id'";
	if($conn->query($sql)==TRUE){
		echo "<script>alert('Data Updated Successfully');
		window.location='index.php';</script>";
	}
	else{
		echo "Error: " .$conn->error;
	}
	$conn->close();
	}
  ?>}
</body>
</html>
