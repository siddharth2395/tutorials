<html>
<body>
	<form action="signup_action.php" method="post" enctype="multipart/form-data">
  <div>
	<label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required> <br />

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required> <br />

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br />

	<label><b>picture</b></label>
	<input type="file" name="fileToUpload">
	<input type="submit" name="submit">

  </div>
</form>
</body>
</html>
