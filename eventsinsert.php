<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$place=$_POST["place"];
$date=$_POST["date"];


$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="insert into Events(name,place, date) values('$name', '$place', '$date')";
$q2="insert into Coreteams(eventid) 
VALUES (
  (SELECT eventid 
         FROM  events
         WHERE name='$name')
  );
";
mysql_query($q1) or die ("Insert error q1");
mysql_query($q2) or die ("Insert error q2");
echo("Insert successful!");
?>
</body>
</html>