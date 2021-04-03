<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$surname=$_POST["surname"];

echo("Name:".$name."<br>");
echo("Surname:".$surname."<br>");


$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="delete from Members where name='$name' and surname='$surname'"; 
mysql_query($q1) or die ("Delete error");
echo("Delete successful!");
?>
</body>
</html>