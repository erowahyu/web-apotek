<?php 
include 'include/sessionuser.php';
include 'include/headeruser.php'; 
?>
<?php

if (isset($_POST['submit'])) {

	$target_dir  = 'uploads/';
	$target_path = $target_dir . basename($_FILES['image']['name']);
	$uploadOk    = false;

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
	{	
		$uploadOk = true;	
	}
	else 
	{
		die("Upload gagal!");
	}		

}

?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>
<?php 
include 'include/navbaruser.php';
?>
<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>

<?php
	if($uploadOk)
	{
		echo "<p>Upload berhasil:</p>";
		echo "<img src='{$target_path}'>";
	}
	
	?>
		
	<form action="" method="post" style="margin-top:30px;" enctype="multipart/form-data">
		<p>Complaintment : </p>
		<label for="avatar">Choose a picture:</label>
		<input type="file" name="image" accept="image/*"/>
		<br/>
		<br/>
		<input type="submit" name="submit"/>
	</form>

</div>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>Wanna get in touch. Email us at <a href="mailto:admin@customstore.com">admin@apotek.com</a></p>
    </div>
</div>
 <?php include 'include/footer.php'; ?>