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
$status=$_POST["status"];


$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");

$q1="select members.name as 'Member Name', events.name as 'Event Name'
from members 
inner join coreteams on coreteams.ctid=members.ctid
inner join events on coreteams.eventid=events.eventid
where events.name='$status'
order by  members.name";
mysql_query($q1) or die ("Error error");


$result=mysql_query($q1);

echo "<table>"; // start a table tag in the HTML
	echo "<tr>";
		echo "<th>Member Name</th>";
		echo "<th>Event Name</th>";
	echo "</tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] ."</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML


?>
</body>
</html>