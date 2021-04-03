<html>
<head>
<title>HTML-PHP parameter transmission
</title>
</head>
<body>
<?php
$name=$_POST["name"];
$surname=$_POST["surname"];
$year=$_POST["yearofstudy"];
$generation=$_POST["generationid"];
$statuss=$_POST["statusid"];
$ct=$_POST["ctid"];
$ctrole=$_POST["ctroleid"];

echo("Name:".$name."<br>");
echo("Surname:".$surname."<br>");
echo("Year of study:".$year."<br>");
echo("Generation id:".$generation."<br>");
echo("Status:".$statuss."<br>");
echo("Coreteam ID:".$ct."<br>");
echo("Coreteam role ID:".$ctrole."<br>");



$ConnLink=mysql_connect("localhost","root","") or die ("Connection failed");
$database=mysql_select_db("connectionstudentorganization") or die ("Database selection failed");
$q1="UPDATE Members SET yearofstudy = '$year' , generationid='$generation', statusid='$statuss', ctid='$ct', ctroleid='$ctrole' where name='$name' and surname='$surname'"; 
mysql_query($q1) or die ("Update error");
echo("Update successful!");
?>
</body>
</html>