
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1 class="main_title">CYBER SAFE SURAT</h1>

<form method="post" action="download.php" enctype="multipart/form-data">

	<div class="container">
		<label for="uname"><b>Name</b></label>
		<input type="text" placeholder="Enter Your Name" name="name" required>

		<label for="psw"><b>Mobile No.</b></label>
		<input type="text" placeholder="Mobile No." name="contact" required>

		<label for="psw"><b>Photo</b></label>
		<input type="file" name="image" required>

		<button type="submit" name="submit">Click Here</button>
	</div>

	<!-- <table border="2">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Click Here"></td>
		</tr>
	</table> -->
</form>

<style>
	*{
		box-sizing: border-box;
	}
body {
	font-family: Arial, Helvetica,
	sans-serif;
	padding: 20px;
	background-image: linear-gradient(#003366,#021a33);
	height: 100vh;
	overflow: hidden;
	margin: 0;

}

.main_title{
	text-align: center;
	color: #ffbc06;
	margin-bottom: 50px;
	font-size: 40px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0 30px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  outline: none;
}
input[type=file]{
/*	color: white;*/
	background-color: white;
}
/* Set a style for all buttons */
button {
  background-color: #ffbc06;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover {
  opacity: 0.8;
}

label{
	color: white;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</body>
</html>