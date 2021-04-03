<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
echo("Deleted:".$name."<br>");

$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="update members 
set ctroleid = null
 where members.ctroleid in(
select ctroles.roleid  
from ctroles
where ctroles.name='$name')";

$q2="delete from ctroles 
where (ctroles.name='$name');";
 
mysql_query($q1) or die ("Delete error query 1");
mysql_query($q2) or die ("Delete error query 2");
echo("Delete successful!");
?>
</body>
</html>