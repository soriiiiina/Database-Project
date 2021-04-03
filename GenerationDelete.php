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
set generationid = null
where members.generationid in(
select generation.generationid 
from generation
where generation.name='$name')";

$q2="delete from generation 
where (generation.name='$name');";

mysql_query($q1) or die ("Delete error q1");
mysql_query($q2) or die ("Delete error q2");

echo("Delete successful!");
?>
</body>
</html>