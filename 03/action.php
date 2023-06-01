<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>php forms</h1>
    
    <form action="action.php" method="post">
	<p>Your name: <input type="text" name="name" /></p>
	<p>Your age: <input type="text" name="age" /></p>
	<p><input type="submit" /></p>
</form>

Hi <?php echo htmlspecialchars($_POST['name']);?>
You are <?php echo (int)$_POST['age']; ?> Years Old
    
</body>
</html>