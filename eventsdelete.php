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
 
$q1="UPDATE members 
SET ctid = null
 where members.ctid in(
select coreteams.ctid from coreteams 
inner join events on events.eventid=coreteams.eventid
where events.name='$name')";

$q2="delete c.* from coreteams c
inner join events e on e.eventid=c.eventid
where (e.name='$name')";

$q3="delete from events  
where (events.name='$name')";


mysql_query($q1) or die ("Delete error q1");
mysql_query($q2) or die ("Delete error q2");
mysql_query($q3) or die ("Delete error q3");
echo("Delete successful!");
?>
</body>
</html>