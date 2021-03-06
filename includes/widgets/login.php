<form class="navbar-form navbar-right" action="login.php" method="post">
	<div class="row">
		<div class="col-md-12 hidden-xs hidden-sm margin-right">
			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
			<button type="submit" class="btn btn-success" style="margin-right: 5px;">Sign In</button>
		</div>
		<div class="col-xs-10 visible-xs visible-sm">
			<a href="login.php?new">Log In!</a>
		</div>
		<div class="col-xs-2 visible-xs visible-sm"> 
		</div>
	</div>
	<div class="row white-text">
		<div class="col-md-12 hidden-xs hidden-sm">
			Forgotten your <a href="recover.php?mode=username">Username</a> or <a href="recover.php?mode=password">Password</a>?
		</div>
	</div>
</form>