<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<h1>Admin Login</h1>
<?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
<form method="POST" action="/login">
    <input type="password" name="password" placeholder="Enter Admin Password" required>
    <button type="submit">Login</button>
</form>
</body>
</html>
