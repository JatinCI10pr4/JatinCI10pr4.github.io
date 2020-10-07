<?php
// Validating select menus 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
}else{
    show_form();
}


function process_form(){
print $_POST['order'];
}




function show_form(){

$options = array('razor','macbook','predatorx');
$html = "";    
foreach($options as $option){
    $html .= "<option value=$option>$option<option>";
}
print <<<_HTML_
<form method="POST" action="$SERVER[PHP_SELF]">
<select name="order">
$html
</select>
<input type =  "submit" value="submit">
</form>
_HTML_;
}

?>