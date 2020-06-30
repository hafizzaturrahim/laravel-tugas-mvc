<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="/welcome" method="POST">
		@csrf
		<h1>Buat Account Baru!</h1>
		<h2>Sign Up Form</h2>

		<label for="fname">First name:</label><br><br>
  		<input type="text" id="fname" name="fname"><br><br>

		<label for="lname">Last name:</label><br><br>
		<input type="text" id="lname" name="lname"><br><br>

  		<label for="gender">Gender:</label><br><br>
  		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br><br> 
		
		<label for="nation">Nationality:</label><br><br>
		<select name="Nationality" id="nation">
		  <option value="Indonesian">Indonesian</option>
		  <option value="Malaysian">Malaysian</option>
		  <option value="Philippines">Philippines</option>
		  <option value="Singaporean">Singaporean</option>
		</select><br><br> 

		<label for="language">Language Spoken:</label><br><br> 
		<input type="checkbox" id="ind" name="ind" value="Bike">
		<label for="ind"> Bahasa Indonesia</label><br>
		<input type="checkbox" id="vehicle2" name="english" value="english">
		<label for="english"> English</label><br>
		<input type="checkbox" id="other" name="other" value="other">
		<label for="other"> Other</label><br><br> 

		<label for="bio"> Bio:</label><br><br> 
		<textarea rows="5" cols="30" name="bio"></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>