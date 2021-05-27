<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="registrationform.php" method="POST"> First name:

        <input type="text" name="firstname"> <br> Last name:

        <input type="text" name="lastname"> <br> Mobile No.:
		
		<input type="text" name="mobileno"> 
		
		
        <input type="hidden" name="form_submitted" value="1" /> <br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>