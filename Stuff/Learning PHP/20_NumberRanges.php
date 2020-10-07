<?php

 if($_SERVER['REQUEST_METHOD'] == "POST"){
     $input['age'] = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT, 
                                    array('options' =>  array('min_range'=>2,
                                    'max_range'=>12)));

    if($input['age'] == false){
        print "Sorry baby boss you are not allowed to be in .";
    }else{
        print "Welcome baby boy.";
    }                                
 }else{
  print <<<_HTML_
  <form method ="POST"   action="$_SERVER[PHP_SELF]" >
  <input type="text" name = "age">
  </form>
  _HTML_;
 }
?>