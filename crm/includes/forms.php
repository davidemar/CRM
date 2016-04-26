<?php
include_once("./includes/functions.php");
function DisplayLoginForm()
{
	?>
		
	<h3 class="greyBG">Login</h3>
	<form method="post" action="">
		
		<label for="username">Usuario</label>
		<input type="text" name="username" id="username" value="" />
		<div class="clr"></div>
		<label for="pass">Contraseña</label>
		<input type="password" name="pass" id="pass" value="" />
		<div class="clr"></div>
		<input type="submit" name="submitted" class="greenBG" value="Login" style="margin-right:32px;" />
		<div class="clr"></div>
	</form>
	<?php
}


function DisplayComplainForm()
{
	?>
		
	<h3 class="greyBG">Login</h3>
	<form method="post" action="">
		
		<label for="username">Usuario</label>
		<input type="text" name="username" id="username" value="" />
		<div class="clr"></div>
		<label for="pass">Contraseña</label>
		<input type="password" name="pass" id="pass" value="" />
		<div class="clr"></div>
		<input type="submit" name="submitted" class="greenBG" value="Login" style="margin-right:32px;" />
		<div class="clr"></div>
	</form>
	<?php
}

function DisplayContactForm($record){

}

function DisplayCategoryForm($record){

}
?>