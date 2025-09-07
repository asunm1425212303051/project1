<html>
<head>
<title> project </title>
</head>
<body>
<form method ="post">
<p>ENTER THE NUMBER </p>
<input type= "number" name ="temp">
<input type ="submit" value ="generate">
</form>
<?php
if(isset($_POST["temp"]))
{
$temp = $_POST["temp"];

for($i= 1;$i <=$temp;$i++)
{
for($k=1;$k <= ($temp-$i);$k++)
{
echo "&nbsp;";
}
for($j= 1;$j <= $i;$j++)
{
echo" * ";
}

echo"<br>";
}
}

?>
</body>
</html>