<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
}
th {
  text-align: left;
}
</style>
<body>
<?php
$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");

$q1="select * from statuses"; 
mysql_query($q1) or die ("Update error");

$result=mysql_query($q1);

echo "<table>"; // start a table tag in the HTML
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Description</th>";
		echo "</tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['statusid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
?>
</body>
</html>