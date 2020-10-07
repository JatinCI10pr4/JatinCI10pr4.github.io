<?php
assert(trim("'".hacker".system('uname -a').'."'"));
echo "Hello ".htmlentities($_GET['name']);
?>
