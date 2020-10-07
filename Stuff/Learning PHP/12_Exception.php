<?php
  
  // Causing an exception by throwing an error
  
  try{
      throw new Exception("Hacker is Here");
  }catch(Exception $e){
      print $e->getmessage();
  }


  print "<br><br><br>";




  try{
      $var = "hero";
      $boy =  counter($var);
  }catch(Exception $e){
      print "Error :  ".$e->getMessage();
  }
?>