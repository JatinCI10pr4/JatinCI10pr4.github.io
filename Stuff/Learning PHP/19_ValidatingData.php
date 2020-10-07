<?php
   

  if ($_SERVER['REQUEST_METHOD'] == "POST"){
      $form_errors = array();
      $input = array();
      list($form_errors, $input) = validate_form();
      if($form_errors){
          show_form($form_errors);
      }else{
          process_form($input);
      }
  }else{
      show_form();
  }

  function show_form($errors = array()){
      
      if($errors){
          print "<ul><li>";
          print implode('</li><li>',$errors);
          print "</li></ul>";
      }
      print <<<_HTML_
      <form method="POST" action="$_SERVER[PHP_SELF]">
      Name : <input type="text" name="usr_name"><br><br>
      Age : <input type="text" name="usr_age"><br><br>
      Object Price : <input type="text" name="usr_price"><br><br>
      <input type="submit" value="Login" ><br>
      </form>
      _HTML_;
  }

  function process_form($input){
      print "Hello ".$input['user_name'];
  }

  function validate_form(){
     
      $errors = array();
      $input = array();

      $input['user_name'] = trim($_POST['usr_name']);
      if(strlen($input['user_name']) <= 3){
          $errors[] = "Username must consist of more than 3 characters .";
      }

      $input['user_age'] = filter_input(INPUT_POST,'usr_age',FILTER_VALIDATE_INT);
      if(is_null($input['user_age']) || $input['user_age'] == false ){
          $errors[] = "please enter a valid age";
      }

      $input['user_price'] = filter_input(INPUT_POST,'usr_price',FILTER_VALIDATE_FLOAT);
      if(is_null($input['user_price']) || $input['user_price'] == false){
          $errors[] = "Please enter a valid price";
      }
      return array($errors,$input);
  }


?>

