<?php
if($_POST['user']){
    print "Hello ".$_POST['user'];
}else{
    print <<<THECODE
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Your Name : <input type="text" name="user"/>
    <br/>
    <button type="submit">Say Hello</button>
    </form>
    THECODE;
}
?>