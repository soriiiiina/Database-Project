<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$description=$_POST["description"];

echo("Name:".$name."<br>");
echo("Surname:".$description."<br>");

$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="insert into ctroles(name, description) values('$name', '$description')";
mysql_query($q1) or die ("Insert error");
echo("Insert successful!");
?>
</body>
</html>