<!DOCTYPE html>
<html>

	<title>Navigation Area</title>
	
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
	

<?php
if(isset($_SESSION['user_info']))
	
	echo 'Welcome &nbsp;'.$_SESSION['user_info'].'</a>' ,'&nbsp; &nbsp; &nbsp' ,'<a href="logout.php">Logout?</a>';

else
	echo 'Do you have an account? ','&nbsp; &nbsp; &nbsp' ,'<A HREF="login.php">Login</A>';
?>
&nbsp; &nbsp; &nbsp;

</div>
</div>
</div>	


</html>