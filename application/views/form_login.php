<?php
echo form_open('operator/login');
?>

	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-4">
				<br>
				<form>
					<br>
					<br>
					<br>
					<br>
					<div class="form-group">

					<center><h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1></center><br>		
				    <input type="text" class="form-control" name="username" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" name="password" placeholder="Password">
				  	</div>
				  	<center><br>
				  <div ><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button></div>
				</form>
			</div>
		</div>
	</div>
</div>