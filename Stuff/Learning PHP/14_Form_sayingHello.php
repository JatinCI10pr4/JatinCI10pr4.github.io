<?php
if("POST" == $_SERVER['REQUEST_METHOD']){
    print "Hello ".$_POST['my_name'];
}else{
    print <<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Your Name : <input type="text" name="my_name" />
    <br>
    <input type="submit" value="Say Hello"/>
    </form>
    _HTML_;
}
?>