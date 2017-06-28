<?php
$book = 'yes';
$magazine = 'no';

$count = 10;

$var1 = '  hello everybody, this IS a string     ';
$var2 = 'rafa@gmail.com';

echo substr($var1, 2, 3);
echo '<br>';
echo strpos($var1, 'e', 4);
echo '<br>';
// echo trim($var1);
echo '_without space, thanks trim';
echo '<br>';
echo strlen($var1);
echo '<br>';
echo ucfirst($var1);
echo '<br>';
echo strlen($var1);
echo '<br>';
echo ucwords($var1);
echo '<br>';
echo strtoupper($var1);
echo '<br>';
echo strtolower($var1);
echo '<br>';
echo strstr($var2,'@');
echo '<br>';
echo '<br>';
echo '<br>';




// Associtive ArrayAccess

$tasks = array('1' => 'first', '2' => 'second' );


foreach ($tasks as $key => $task) {
  echo $key . '=>' . $task . '<br>';
}

echo '<br>';


$employees = array('em1' => array('nombre' => 'fran', 'edad' => '20'), 'em2' => array('nombre' => 'paco', 'edad' => '22'));
echo $employees['em1']['nombre'];

echo '<br>';
echo '<br>';

foreach ($employees as $employee) {
  foreach ($employee as $key => $value) {
    echo $key . '=>' . $value . '<br>';
  }

}

print_r($employees);

$RM_players = array('keylor', 'carvajal', 'marcelo', 'pepe' , 'ramos');

echo "<br>";
print_r($RM_players);
echo "<br>";
echo count($RM_players);
echo in_array('pep', $RM_players);
echo '<br>';

echo current($RM_players);

echo '<br>';
$midfielder = array('casemiro', 'kroos');
array_push($midfielder, 'modric');
print_r($midfielder);
echo '<br>';

echo '<br>';

echo '<br>';

echo '<br>';




echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_SERVER['REQUEST_URI'];
echo '<br>';




echo '<br>';


$val1 = 5;
$val2 = 8;
$val3 = 'news';
function func8(){
  // global $val1;
  echo 'this is a new function' . $GLOBALS['val1'] ;
}
func8();

echo '<br>';

echo '<br>';


echo '<br>';


echo '<br>';

echo '<br>';

echo '<br>';

echo '<br>';

echo '<br>';





 ?>
<a href="receive.php?name1=rafa&surname=truji">Click to go</a>

<!-- <?php
  $name1 = "rafa";
 ?> -->
