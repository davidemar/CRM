<?php
include_once("./includes/functions.php");
function UserDisplayLoginForm()
{
	?>
		
	<h3 class="greyBG">Login</h3>
	<form method="post" action="">
		
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="" maxlength = '6' placeholder = 'UserName'/>
		<div class="clr"></div>
		<label for="pass">Password</label>
		<input type="password" name="pass" id="pass" value="" maxlength = '14' placeholder = 'Password'/>
		<div class="clr"></div>
		<input type="submit" name="submitted" class="greenBG" value="Login" style="margin-right:32px;" />
		<div class="clr"></div>
		<a class="register" href='./includes/userRegister.php'>Register</a>

	</form>	

	<?php
}



function DisplayContactForm($record){

}

function DisplayCategoryForm($record){

}
?>