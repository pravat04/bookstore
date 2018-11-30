<?php
	$title = "Change password";
	require_once "./template/header.php";
?>

<?php
if (isset($_POST['submit']))
	{
		$curpwd=$_POST['curpwd'];
		$npwd=$_POST['npwd'];
	
		include "functions/db.php";
		$sql="update admin set pass='".$npwd."' where pass='".$curpwd."'";
		$q=mysqli_query($con,$sql);
		if($q)
		{
			$msg="Password Changed successfully";

		}
		else {

			$msg="Error";
		}
	}
?>

	<form class="form-horizontal" method="post" >
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Current password</label>
			<div class="col-md-4">
				<input type="password" name="curpwd" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">New password</label>
			<div class="col-md-4">
				<input type="password" name="npwd" class="form-control">
			</div>
		</div>
			<div class="form-group">
			<label for="pass" class="control-label col-md-4">Confirm Password</label>
			<div class="col-md-4">
				<input type="password" name="cpwd" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">
		<?php if(isset($msg))
			{
				echo $msg;
			}
			?>
	</form>
<script>
function myFunction() {

    alert("password change sucessfully !!");
}
</script>
<?php
	require_once "./template/footer.php";
?>
