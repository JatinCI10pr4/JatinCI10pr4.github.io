<form method="POST" action="16_MultipleValues.php">
<input type="text" name="product_id">
<select name="category[]" multiple>
<option value="ovenmitt">Pot Holder</option>
<option value="Patties">Patties</option>
<option value="Burger">Burger</option>
</select>
<input type="submit" name="submit"/>
</form>
Selected Categories : <?php

print "<br>";
foreach($_POST['category'] as $val){
    print $val."<br>";
}

?>