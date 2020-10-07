<?php
$strOne = "Jatin";
$strTwo = "Ashi Chopra";

// true - if first string is greater. 
// false - if second string is greater.
// 0 - if both the strings are equal.
$cmp = strcmp($strOne,$strTwo);  // true jatin > ashi chopra


print $cmp."<br>";


if($cmp<0){
    print $strOne."<br>";
    print $strTwo;
}else{
    print $strTwo."<br>";
    print $strOne;
}
?>