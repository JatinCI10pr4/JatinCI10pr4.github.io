<?php

// function to print array 
function print_array($array){
    foreach($array as $key => $value){
        print "<br>";
        print "".$key." => ".$value."";
        
    }
}




// sort(array_name) :  sorts array in ascending order
// sorting numeric arrays 

$num_array = [100,50,39,1,2,6,0,888,99,33,0];
print "<h1>Using Sort</h1>";
print "Unsorted Array : ";
print_array($num_array);
print "<br>----------------------------";
print "<br>Sorted Array : ";
sort($num_array);
print_array($num_array);
print "<br>----------------------------";



// asort(array_name) : sorts the array by element value along with its keys 

$user_pass_array  = ["jatin"=>"pass","ashi"=>"1123","rashmi"=>"9876","vikas"=>"abc","chanchal"=>"ghi"];
print "<h1>Using asort</h1>";
print "Unsorted Array : ";
print_array($user_pass_array);
print "<br>----------------------------";
print "<br>Sorted Array : ";
asort($user_pass_array);
print_array($user_pass_array);
print "<br>----------------------------";


// ksort()

print "<h1>Using ksort</h1>";
print "Unsorted Array : ";
print_array($user_pass_array);
print "<br>----------------------------";
print "<br>Sorted Array : ";
ksort($user_pass_array);
print_array($user_pass_array);
print "<br>----------------------------";













?>