<?php
print $_SERVER['REQUEST_METHOD'];
if('POST' == $_SERVER["REQUEST_METHOD"]){
    process_form();
}else{
    show_form();
}


function process_form(){
    if(validate_form($_POST['usr'])){
        print "Hello ".$_POST['usr'];
    }else{
        print "Not Valid";
    }
    
}

function show_form(){
    print <<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]"> 
    <input type="text" name="usr" placeholder="User Name"/>
    <select name="category[]" multiple>
    <option value="burger">Burger</option>
    <option value="pizza">Pizza</option>
    <option value="Spring Roll">Spring Roll</option>
    </select>
    <input type="submit" value="Eat"/>
    </form>
    _HTML_;
}


function validate_form($name){
    if(strlen($name)<3){
        return false;
    }else{
        return true;
    }
}

?>