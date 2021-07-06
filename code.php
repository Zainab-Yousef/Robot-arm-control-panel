


 <head>
	   <style>
  body {
  background-image: url('direction.jpg');
  background-attachment:fixed;
  background-repeat: no-repeat;
  background-position: center;
		   }
	 </style>
</head>
<?php
if(!isset($_POST['myFrom']))
{
	header("location: dir.php");
	return;
}


$value = "";
foreach($_POST as $v)
{
	$value = $v;
}

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'direction';
$conn = mysqli_connect($host,$user,$pass,$database);
mysqli_query($conn, "INSERT INTO `movement`(`direction`) VALUES ('$value')");
?> 

<body>
<div style="font-size: 50px;"  >
	<?php echo $v; ?>
</div>
</body>