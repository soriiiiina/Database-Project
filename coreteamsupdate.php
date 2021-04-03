<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$nname=$_POST["nname"];




$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="UPDATE coreteams SET name = '$nname' where name='$name'"; 
mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>