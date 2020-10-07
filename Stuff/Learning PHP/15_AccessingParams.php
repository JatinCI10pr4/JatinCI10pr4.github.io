<form method="POST" action="15_AccessingParams.php">
<input type="text" name="product_id">
<select name="category">
<option value="ovenmitt">Pot Holder</option>
<option value="Patties">Patties</option>
<option value="Burger">Burger</option>
</select>
<input type="submit" name="submit"/>
</form>

Here are the submitted Values 
<?php
print "<br>product id : ".$_POST['product_id'] ?? '';
print "<br>category : ".$_POST['category'] ?? '';
?>