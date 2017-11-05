<html>
<head>
    <title>Hello World</title>
<body>
<?php echo "Hello, World!";?>

<?php echo "Print Text";?>

<?php printf("%s<br>","printf \n printng text \n") ?>
<?php
$var = "Variable Value";
$var2 = "2nd Variable22";
echo $var . " Space ". $var2;

echo "Date FORMAT \n<br>";

echo date("D" ) ."<br>";
echo date("d");

$ages[sathish] = '42';
$ages[haymanth]= ' 24';

echo "<br />associate array " . $ages[sathish] . " is sathish " . $ages[haymanth]." is haymanth <br />";

$i=0;
do
{
    $i++;
    echo "The number is " . $i . "<br />";
}
while ($i<=5);

for ($i=2; $i<=50; $i+=10)
{
    echo "The number is " . $i . "<br />";
}


$x=array("one","two","three");

foreach ($x as $value)
{
    echo $value . "<br />";
}

echo "<b>FUNCTION EXAMPLE </b> <br />";

function writeName()
{
    echo "Kai Jim Refsnes";
}
echo "My name is ";
writeName();

echo "<br /> <b>FUNCTION with return </b> <br />";

function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
echo "1 + 16 = " . add(1,16);





echo "<br /> <b>MYSQL ACTIONS</b> <br />";
// mysqli

$mysqli = new mysqli("localhost", "root", "egrove", "employee");
$result = $mysqli->query("SELECT * from profile");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']."result");
?>

<form action="postget.php" method="post">
    Name: <input type="text" name ="name"/>
    <br />
    Age: <input type="text" name ="age"/>
    <input type="submit" />
</form>



</body>
</html>
