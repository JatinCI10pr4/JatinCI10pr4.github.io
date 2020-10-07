<?php 
print $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $something = array();
    $something =validate_data();
    if($something == false){
        print "Bonjoure Sir";
    }else{
        print implode("-",$something);
    }
}else{
    show_form();
}

function show_form(){
    
    print <<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Type Passcode : <input type="text" name="pass">
    <input type="submit" value = "OK">
    </form>
    _HTML_;
}

function validate_data(){
    $errors = array();
    $num = filter_input(INPUT_POST,'pass',FILTER_VALIDATE_INT);
      
    if(is_null($num) || $num == false){
        $errors[]  = "Please enter a valid age.";
        print "<script>alert ('error')</script>";
        return $errors;
        
    }

         
}


?>
