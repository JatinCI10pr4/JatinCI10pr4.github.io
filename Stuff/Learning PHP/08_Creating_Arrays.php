<?php
$days = ["Sunday","Monday","Tuesday","Thursday","Friday","Saturday","Sunday"];

$keys = array(
    "F1" => "Function 1",
    "F2" => "Function 2",
    "f3" => "Function 3"
);



function array_printer($array){
print "<table border='1px black solid'>";
  foreach($array as $key => $val){
      print "<tr><td>$key</td><td>$val</td></tr>";
    }
print "</table>";

}

array_printer($days);
array_printer($keys);
print "<br>";
print "Elements in array one : ".count($days);
print "<br>";
print "Elements in array two : ".count($keys);


print "<br>If F2 key is there in keys array : ";
print array_key_exists('F2',$keys)."<br>";

print " IF Tuesday value exist in days array : ";
print in_array('Tuesday',$days)."<br>";

print "Get the key of function 3 if it exist in the array keys : ";
print array_search('Function 3',$keys);

print "<br>Get the value of key F3 : {$keys['f3']}";

$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake');
$menu = implode('-', $dimsum);
print $menu;



?>