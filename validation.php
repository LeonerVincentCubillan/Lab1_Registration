
<html>
<head>
	<title></title>
</head>
<body>



 <br><br> 




<?php  
echo "Name: "; 
 ?>
<b>
    <?php 
    echo $_POST["fname"];
 ?>

 <?php 
	echo $_POST["lname"];
 ?>

 <?php 
	echo $_POST["mname"];
 ?></b><br><br>


 <?php 
	echo "Address:";
 ?>
 <b>
    <?php  
     echo $_POST["address"];
     ?>
 </b>
 <br><br>

 <?php 
	echo "Birthdate: ";
 ?>
 <b>
     <?php 
     echo $_POST["birthday"]; ?>
 </b>
 <br><br>
 <?php 
	echo "Place of Birth: ";
 ?>
 <b>
     <?php  echo $_POST["place"]; ?>
 </b><br><br>
 <?php 
	echo "Gender: "; 
 ?>
 <b>
     <?php 
     echo $_POST["gender"]; ?>
 </b><br><br>
 <?php 
	echo "Guardian: "; 
 ?>
 <b>
     <?php 
     echo $_POST["guardian"]; ?>
 </b><br><br>
 <?php 
	echo "Phone Number: "; 
 ?>
 <b>
     <?php echo $_POST["phonenum"]; ?>
 </b><br><br>
 <?php echo "Status: "; ?>
 <b>
     <?php 
     echo $_POST["status"]; ?>
 </b><br><br>
 <?php 
	echo "Year Level: ";
 ?>
 <b>
     <?php echo $_POST["yearlvl"]; ?>
 </b><br><br>
 <?php 
    echo "Course: "; 
 ?>
 <b>
     <?php echo $_POST["course"]; ?>
 </b><br><br>
 <?php 
    echo "School Year: "; 
 ?>
 <b>
     <?php echo $_POST["sy"]; ?>
 </b><br><br>



</body>
</html>