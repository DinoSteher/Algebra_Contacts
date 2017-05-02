<?php
	require_once 'core/init.php';
	Helper::getHeader('Algebra Contacts');
	require_once 'notifications.php';
?>
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class="jumbotron">
				<div class="container">
					<h1>Algebra Contacts</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae viverra erat, eu pharetra massa. Suspendisse finibus condimentum urna eget blandit. Vestibulum id est ut augue elementum dignissim eu ac tortor. Quisque eget metus id eros euismod ullamcorper. Etiam vulputate est sapien, in faucibus odio lobortis eu.
					</p>
					<a class="btn btn-primary btn-lg" href="login.php" role="button">Sign in</a>
					or
					<a class="btn btn-primary btn-lg" href="register.php" role="button">Create an Account</a>

				</div>
			</div>
		</div>
	</div>

 <?php
	Helper::getFooter();
?>