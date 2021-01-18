<html lang="en">
 <head>
	<meta charset="utf-8">
	<title>Nature Primary School</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link rel="stylesheet" href="registerstyle.css">
  <link rel="stylesheet" href="HeaderFooter.css">
 </head>


 <body>
 <img class="banner" src="images/Banner2b.png" alt="Nature School Banner">
	<form action="process_register.php" method="post">
		<h1>Register</h1>
		<fieldset>
		<table>
		<tr>
		<td>
		<label>Name:</label>
		<input type="text" name="name" value="" required />
		</td>
		</tr>

		<tr>
		<td>
		<label>Date of Birth(DOB): </label>
			<input type="date" name="date" required />
		</td>
		</tr>

		<tr>
		<td>
		<label>Email:</label>
		<input type="text" name="username" value="" required />
		</td>
		</tr>

		<tr>
		<td>
		<label>Password:</label>
		<input type="password" name="password" value="" required />
		</td>
		</tr>

		<tr>
		<td>
		<label>Address:</label>
		<textarea name="address"></textarea>
		</td>
		</tr>

		<tr>
		<td>
		<label>City:</label>
		<input type="text" name="city" value="">
		</td>
		</tr>

		<tr>
		<td>
		<label>Zipcode:</label>
		<input type="text" name="zipcode" value="">
		</td>
		</tr>

		<tr>
		<td>
		<label>State:</label>
		<select name="state">
			<option value="Johor">Johor</option>
			<option value="Kelantan">Kelantan</option>
			<option value="Kedah">Kedah</option>
			<option value="Melaka">Melaka</option>
			<option value="Negeri Sembilan">Negeri Sembilan</option>
			<option value="Pahang">Pahang</option>
			<option value="Perak">Perak</option>
			<option value="Perlis">Perlis</option>
			<option value="Pulau Pinang">Kelantan</option>
			<option value="Sabah">Sabah</option>
			<option value="Sarawak">Sarawak</option>
			<option value="Selangor">Selangor</option>
			<option value="Terengganu">Terengganu</option>
			<option value="Wilayah Persekutuan">Wilayah Persekutuan</option>

		</select>
		</td>
		</tr>

		<tr>
		<td>
		<label>Contact Number:<em>(with '-')</em></label>
		<input type="tel" name="telephone" value="" pattern="[0-9]{3}-[0-9]{7-8}" required>

		</td>
		</tr>
		<tr>
		<td>
		<label>Status:</label>
		<input type="radio" name="status" value="teacher">
		<label class="light">Teacher</label><br />
		<input type="radio" name="status" value="student">
		<label class="light">Student</label><br />
		</td>
		</tr>
		</table>
		</fieldset>

		<button type="submit" name="btn-save">Sign Up</button>

		<p class ="message">Have an account already? <a href="login.php">Login</a></p>

	</form>


 </body>
</html>
