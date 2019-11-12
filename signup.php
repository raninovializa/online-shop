<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="signup.css">
</head>
	<div class="header">
		<h1><img src="peacheur.png" width="500"></h1>
	</div>

	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li>Product</li>
			<li>Search</li>
			<li>Information</li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="signup.php">Sign Up</a></li>
		</ul>
	</div>
<form action="">
	<h2>Sign Up</h2>
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="un"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pw"></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fn"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="ln"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="Date" name="dob"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="add" cols="30" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="pn"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<select name="gender">
					<option>Select</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="status" value="married">Married
				<input type="radio" name="status" value="single">Single
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Register"></td>
		</tr>
	</table>
</form>