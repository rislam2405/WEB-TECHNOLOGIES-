<!DOCTYPE html>
<html>
<head>
	<title>This is a PHP form validation task</title>
	<style type="text/css">
		.red{
			color: red;
			font-family: Perpetua;
		}
	</style>
	<title>Append Data to JSON File using PHP</title>  
           
</head>
<body>
  
	<?php include 'top.php';?>
	
	

	<fieldset>
		<legend>REGISTRATION</legend>
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
		<fieldset>
		        <label>Name</label> 
				<input type="text" name="fname"  value="<?php echo $name;?>"><span class="red"><?php echo $nameErr ?></span><br />
                 <br>
				 <label>E-mail</label>
				<input type="text" name="email" value="<?php echo $email;?>"><span class="red"><?php echo $emailErr ?></span>
                <br><br>
				<label>User Name</label>
				<input type="text" name="user_name" value="<?php echo $userName;?>"><span class="red"><?php echo $userNameErr ?></span>
				<br><br>
				<label>Password</label>
				<input type="text" name="password" value=""><span class="red"><?php echo $passErr ?></span>
				<br><br>
				<label>Confirm Password</label>
				<input type="text" name="con_pass" value=""><span class="red"><?php echo $con_passErr ?></span>
				<br><br>

				<label>Gender </label><br><br>
				<input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female
				<input type="radio" name="gender" value="others" id="others">Others
				<span class="red"><?php echo $genderErr ?></span>	<br><br><br>
				
				<label>DATE OF BIRTH </label><br><br>
				<input type="date" name="dob"> 
				<span class="red"><?php echo $dobErr ?></span>
				<br><br>
				<hr>
				</fieldset>

			
			<input type="submit" name="submit" value="Submit"><span>   </span>
			<input type="reset" name="reset" value="Reset">


</form>
</fieldset>


<?php include 'footer.php';?>

</body>
</html>