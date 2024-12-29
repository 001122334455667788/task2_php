
<?php
//task1
echo nl2br("task 1.\ntask 2.");
//-------------------------------------------;
//task2;
echo nl2br("\n"); //new line
foreach($_SERVER as $key => $value) {
    print"$key = $value <br/>";
}
//-------------------------------------------;
//task3-1;
echo nl2br("\n"); //new line
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
 //array_replace_recursive function replace the values of array a with the values of array b
print_r(array_replace_recursive($a2,$a1));
//-------------------------------------------;
//task3-2;
echo nl2br("\n"); //new line
function myfunction($v1,$v2) {
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
//array_reduce function requires the callback function to take two parameters: the accumulator and the current array element
print_r(array_reduce($a,"myfunction"));
//-------------------------------------------;
//task3-3;
echo nl2br("\n"); //new line
$people = array("Peter", "Joe", "Glenn", "Cleveland");
//The pos() function returns the value of the current element in an array.
//This function is an alias of the current() function.
echo pos($people) . "<br>";
//The next() function returns the value of the next element in an array.
echo next($people) ."<br>"; //return joe
echo pos($people) . "<br>"; //return joe
//-------------------------------------------;
//task4;
echo nl2br("\n"); //new line
$values = array(12, 45, 10, 25);
// sum values
echo array_sum($values);
// count values
echo nl2br("\n"); //new line
echo array_sum($values)/count($values);
rsort($values);
//sort values
echo nl2br("\n"); //new line
$arrlength = count($values);
for($x = 0; $x < $arrlength; $x++) {
  echo $values[$x];
  echo "<br>";
}
//-------------------------------------------;
//task5;
$names = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
echo nl2br("\n"); //new line
asort($names); //sorting array according to values in assending order
foreach($names as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
echo nl2br("\n"); //new line
ksort($names); //sorting array according to keys in assending order
foreach($names as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
echo nl2br("\n"); //new line
arsort($names); //sorting array according to values in descending order
foreach($names as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
echo nl2br("\n"); //new line
krsort($names); //sorting array according to keys in descending order
foreach($names as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
?>


