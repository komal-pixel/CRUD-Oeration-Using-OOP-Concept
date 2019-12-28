<!DOCTYPE html>
<html>
<head>

	<title>Insert Operation</title>
	 <!---------------------------Bootstrap css --------------------------->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- like for editable rows -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tabledit.js"></script>
</head>
<style>
	form{
		width: 75%;
		margin-left: 10%;
	}
</style>
<body>
	<section>
	<div class="container">
		<div class="heading text-center">
			<h2>OOP Concept In PHP (CRUD Operation)</h2>	
			<h4>Insert Opertaion</h4>	
		</div>
		<div class="form">
			<?php include ('dbcon.php');?>
			<form class="form group" method="post" action="oopcrud.php">
				<label>Name</label>
				<input class="form-control" type="text" name="name"> <br>
				<label>Email</label>
				<input class="form-control" type="email" name="email"> <br>	
				<button class="btn btn-info" name="save">submit</button>	
			</form>
		</div>	
	</div>
	<div class="display">
			<div class="heading text-center">
					<h4>Display Opertaion</h4>	
			</div>
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql="SELECT  * FROM oopinsert";
					$result=$conn->query($sql);
					if($result ->num_rows >0){ 
						while($row=$result->fetch_assoc()){
						?>	
					<tr>
				<?php echo "<td>" .$row['id']. "</td>";
					  echo"<td>".$row['name']."</td>";
					  echo"<td>".$row['email']."</td>"; 
					  echo "<td><a href='update_table.php?id=".$row['id']."'><button class='btn btn-success'>Update</button> </a></td>";
					  echo "<td><a  href='del_table.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></></td>";	
						 } } ?>
					</tr>
				</tbody>
			</table>
	</div>
</section>
</body>
</html>