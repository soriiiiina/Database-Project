<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];

$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
 
$q1="update members 
set statusid = null
where members.statusid in(
select statuses.statusid 
from statuses
where statuses.name='$name')";

$q2="delete from statuses 
where (statuses.name='$name');";

mysql_query($q1) or die ("Delete error q1");
mysql_query($q2) or die ("Delete error q2");

echo("Delete successful!");
?>
</body>
</html>