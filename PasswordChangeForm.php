<form action="scripts/php/UserAccount/ChangePassword.php" method="post">
	<div class="form-group">
		<label for="changePword" class="formLabel">Password</label>
		<input type="password" class="form-control" id="changePword" name="changePword"
		       aria-describedby="changePwordAssist" placeholder="New Password">
		<small id="changePwordAssist" class="form-text text-muted">Please make your password longer than 8
			characters, with at least 1 number and 1 special character.</small>
	</div>
	<div class="form-group">
		<label for="changePwordConfirm" class="formLabel">Confirm Password</label>
		<input type="password" class="form-control" id="changePwordConfirm" name="changePwordConfirm"
		       placeholder="Confirm New Password">
	</div>
	<button type="submit" id="submit">Submit</button>
	<button type="reset" id="reset">Reset</button>
</form>