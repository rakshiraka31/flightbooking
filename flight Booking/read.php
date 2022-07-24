<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT * FROM airlines ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>

<html>
<head>	
	<title> View Database</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
	
	
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>FirstName</td>
		<td>LastName</td>
		<td>Gender</td>
		<td>Email</td>
		<td>Contact</td>
		<td>Address</td>
		<td>Flight Time</td>
		<td>Destination</td>
		<td>NUmber of Passenger</td>
        <td>Airlines</td>
		<td>seat</td>
        
	
	</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {  
			echo "<tr>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['flight']."</td>";
			echo "<td>".$row['destination']."</td>";
			echo "<td>".$row['nopass']."</td>";
			echo "<td>".$row['air']."</td>";
			echo "<td>".$row['seat']."</td>";	
		}
	?>
	</table>
</body>
</html>
