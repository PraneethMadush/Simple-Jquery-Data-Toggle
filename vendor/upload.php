<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
</head>
<body>
	<div id="content">
		<form method="post" action="upad.php" enctype="multilpart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea name="text" cols="40" rows="4" placeholder="Say some about of the event..."></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="image upload">
			</div>
		</form>
	</div>
</body>
</html>