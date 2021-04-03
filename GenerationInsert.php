<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$season=$_POST["season"];
$year=$_POST["year"];



$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="insert into generation(name, season, year) values('$name', '$season', '$year')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>