<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Music</title>
	<link rel="stylesheet" href="1.css" />
</head>

<body>
	
<div id="figcaption">
	
	
  

<div id="coverMusic">
		
  
 
  

<?php

 mysql_connect("localhost","root","root"); mysql_select_db("songs");

$res=mysql_query("select * from anas");

echo"<table border=1> <tr><th>song Name</th><th>singer</th><th>album</th><th>year</th><th>album pic</th></tr>";

while($row=mysql_fetch_array($res)) { echo "<tr>"; 
	
	echo "<td>"; echo $row["song"]; echo "</td>"; echo "<td>"; echo $row["singer"]; echo "</td>"; echo "<td>"; echo $row["album"]; echo "</td>"; echo "<td>"; echo $row["year"]; echo "</td>"; 
	
	echo "<td>";?><center><img src="<?php echo $row["album pic"]; ?>"heigh="30" width="60"></center> <?php echo "</td>"; 
	
	 echo "</tr>"; } echo "</table>"; 
	?>
	

		<div>
	</div>

</body>
</html>
