<!DOCTYPE html>
<html>
	<head>
		<title>Form Sign Up</title>
	</head>
	<body>
		<h2>Buat Account Baru!</h2>
		<h4>Sign Up Form</h4>

		<form action="/welcome" method="POST">
			@csrf
			<p>First Name:</p>
			<input type="text" name="fname">
			
			<p>Last Name:</p>
			<input type="text" name="lname">

			<p>Gender:</p>
			<input type="radio" name="gender" value="0">Male <br>
			<input type="radio" name="gender" value="1">Female <br>
			<input type="radio" name="gender" value="2">Other

			<p>Nationality:</p>
			<select>
				<option value="indonesian">Indonesian</option>
				<option value="singaporean">Singaporean</option>
				<option value="malaysian">Malaysian</option>
				<option value="australian">Australian</option>
			</select>

			<p>Language Spoken</p>
			<input type="checkbox" name="lang">Bahasa Indonesia <br>
			<input type="checkbox" name="lang">English <br>
			<input type="checkbox" name="lang"> Other

			<p>Bio:</p>
			<textarea name="bio" rows="7" cols="20"></textarea>

			<br>
			<input type="submit" value="Sign Up">
		</form>
	</body>
</html>