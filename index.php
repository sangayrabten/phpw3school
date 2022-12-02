<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>My first PHP page</h1>
<?php
echo "Hello Desuup!";
?>
<br>
<br>
<br>

<?php
$txt = "Bhutan";
echo "I love $txt!";
?>
<br>
<br>
<br>

<?php
$color="red";
$coloR="blue";
$COLOR="Orange";
echo "My tshirt is " .$color . "<br>";
echo "My dress is " .$COLOR . "<br>";
echo "My bag is " .$coloR . "<br>";
?>
<br>
<br>
<br>

<?php
$txt = "good morning friends!";
$x = 6;
$y = 18.6;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>
<br>
<br>
<?php
$txt = "sangayrabten85@gmail.com";
echo "my email $txt!";
?>
<br>

<?php
$txt = "our king.com";
echo "long live " . $txt . "!";
?>
<br>
<br>
<?php
$x = 50;
$y = 100;
echo $x + $y;
?>
<br>
<br>
<br>
<?php
$x = 10; // global scope
 
function myTest() {
  echo "<p>i love my bhutan: </p>";
} 
myTest();
echo "<p>it looking beautifull and ever green: $x</p>";
?>
<br>


<?php
function myPage() {
  $z = 20; // local scope
  echo "<p>this is a cat $z</p>";
} 
mypage();

// using x outside the function will generate an error
echo "<p>cat has four leg  </p>";
?>

<?php
echo "<h2>PHP Echo!</h2>";
echo "Hello bhutan!<br>";
echo "I'm learning about PHP!<br>";
?> 



<?php
$txt1 = "Learn PHP";
$txt2 = "web development skilling";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "i am studying " . $txt2 . "<br>";
print $x + $y;
?>

<br>
<br>
<h1>Data Type</h1>
<?php 
$x = "hello goodmorning!";
$y = 'Hello goodafternoon!';

echo $x;
echo "<br>"; 
echo $y;
?>

<br>

<h1>PHP String</h1>

<?php 
$x = "I Am Desuup!";
$y = 'I Will Serve My Country!';

echo $x;
echo "<br>"; 
echo $y;
?>

<br>

<h1>php intger</h1>
<?php  
$x = 17744480;
var_dump($x);
?>

<br>

<h1>PHP Float</h1>
<?php  
$x = 20.2468;
var_dump($x);
?>

<br>


<h1>PHP Array</h1>
<?php  
$cars = array("punakha","thimphu","wangdue");
var_dump($cars);
?>

<br>



<h1>PHP Object</h1>
<?php
class car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "creta");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("siliver", "landcusier");
echo $myCar -> message();
?>

<br>

<h1>PHP Null Value</h1>
<?php
$x = "Hello teacher!";
$x = null;
var_dump($x);
?>

<br>

<h1>String Strlen</h1>
<?php
echo strlen("Hello everybody!");
?>

<br>

<h1>String Str_Word_Count</h1>
<?php
echo str_word_count("Hello Desuup How Are You?");
?>

<br>

<h1>String Strrev</h1>
<?php
echo strrev("HI TRASHIGANG!");
?> 

<br>

<h1>String Strpo</h1>
<?php
echo strpos("Hello Charo!", "Charo");
?> 

<br>

<h1>String Replace</h1>
<?php
echo str_replace("world", "Dorow", "Hello charo!");
?>

<br>

<h1>Math Min() And Max()</h1>
<?php
echo(min(0, 250, 30, 20, -8, -300) . "<br>");
echo(max(0, 250, 30, 20, -8, -300));
?>


<h1>Math Round()</h1>
<?php
echo(round(0.100) . "<br>");
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(-5.150) . "<br>");
echo(round(-5.250));
?>

<br>

<h1>Math Rand()</h1>
<?php
echo(rand(100, 1000));
?>

<br>

<h1>Constants</h1>
<?php
// case-sensitive constant name
define("GREETING", "Welcome to DSP Training Centre.com!");
echo GREETING;
?> 

<br>

<h1>Constants if</h1><?php
$t = date("N");

if ($t < "20") {
  echo "Nice to hear!";
}
?>

<br>

<h1>Else</h1>
<?php
$t = date("N");

if ($t < "20") {
  echo "Nice to hear!";
} else {
  echo "Nice to meet you!";
}
?>

<br>

<h1>Elseif</h1>
<?php
$t = date("H");
echo "<p>i will (meet you)  " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10am") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a nice day!";
} else {
  echo "Have a sweetdream!";
}
?>

<br>


<h1>Switch</h1>
<?php
$favgame = "basketball";

switch ($favgame) {
  case "basketball":
    echo "Your favorite game is basketball!";
    break;
  case "vollayball":
    echo "Your favorite game is vollayball!";
    break;
  case "football":
    echo "Your favorite game is football!";
    break;
  default:
    echo "Your favorite game is neither basketball, vollayball, nor football!";
}
?>

<br>


<h1>While Loop</h1>
<?php  
$x = 1;
 
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
} 
?> 

<br>

<h1>Do while</h1>
<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 10);
?>


<h1>For Loop</h1>
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>

<h1>For Each</h1>
<?php  
$dzongs = array("thimphu", "paro", "punakha", "zhemgang"); 

foreach ($dzongs as $value) {
  echo "$value <br>";
}
?>

<h1>Break</h1>
<?php  
for ($x = 0; $x < 20; $x++) {
  if ($x == 5) {
    break;
  }
  echo "The number is: $x <br>";
}
?>


<h1>PHP Function</h1>
<?php
function writeMsg() {
  echo "Bhutan Is Beautifull Country!";
}
writeMsg();
?>


<h1>Arrays</h1>
<?php
$cars = array("mango", "orange", "jackfruit"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


<h1>Array Count</h1>
<?php
$fruits = array("mango", "orange", "jackfruit", "plum");
echo count($fruits);
?>

<h1>Indexed Arrays</h1>
<?php
$veg = array("cabbage", "potato", "chilli"); 
echo "I like " . $veg[0] . ", " . $veg[1] . "," .  " and "  .  $veg[2] . ".";
?>


<h1>Associative Arrays</h1>

<?php
$age = array("sonam"=>"35", "tshering"=>"37", "dorji"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<h1>Multidimensional Arrays</h1>
<?php
$fruits = array (
  array("apple",22,18),
  array("mango",15,13),
  array("orange",5,2),
  array("jackfruit",17,15)
);
  
echo $fruits[0][0].": In stock: ".$fruits[0][1].", sold: ".$fruits[0][2].".<br>";
echo $fruits[1][0].": In stock: ".$fruits[1][1].", sold: ".$fruits[1][2].".<br>";
echo $fruits[2][0].": In stock: ".$fruits[2][1].", sold: ".$fruits[2][2].".<br>";
echo $fruits[3][0].": In stock: ".$fruits[3][1].", sold: ".$fruits[3][2].".<br>";
?>

<br>

<?php
$funitures = array (
  array("table",22,18),
  array("chair",15,13),
  array("bench",5,2),
  array("bed",17,15),
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$fruits[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

<br>


<h1>sorting Arrays</h1>
<?php
$trees = array("cypress", "bluepine", "pinetree");
sort($trees);

$clength = count($trees);
for($x = 0; $x < $clength; $x++) {
  echo $trees[$x];
  echo "<br>";
}
?>

<br>


<?php
$alpha = array("a", "b", "d", "c");
sort($alpha);

$arrlength = count($alpha);
 for($x = 0; $x < $arrlength; $x++)  {
  echo $alpha[$x];
  echo "<br>";
}
?>






































</body>
</html>