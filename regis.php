
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Booking</title>
</head>
<body>
<?php

if(isset($_POST['submit']))
{
	
	if(!empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['name']) && !empty($_POST['notes']))
	{
	
    $date=$_POST['date'];
	$time=$_POST['time'];
	$Numof=$_POST['Numof'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$notes=$_POST['notes'];
	
   $con=mysqli_connect('localhost','root','');
   if(!$con)
	  die("Not Connected");
   mysqli_select_db( $con,'restaurant');
   $query="INSERT INTO booking(date,time,Numof,name,email,notes)VALUES('$date','$time','$Numof','$name','$email','$notes')";
	$a=mysqli_query($con,$query);
    if(!$a)
	{
	    echo "Not Registered";
		exit(0);
	}
    else
	{
       include'reg.html';
	}
	}
	else
		echo "Enter Valid Datas";
}
?>
</body>
</html>