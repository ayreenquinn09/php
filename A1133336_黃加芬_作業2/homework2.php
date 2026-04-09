<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login - New York Summer Camp</title>
<style>
body { 
    font-family: Arial; 
    background-color:#f8f0f8; 
}

.container { 
    width: 300px; 
    margin: 100px auto; 
    padding: 30px 20px;
    border: 1px solid #ccc; 
    border-radius:10px; 
    background-color:white; 
}

input[type=text], input[type=password] { 
    width: 100%; 
    padding: 8px; 
    margin: 5px 0; 
    box-sizing: border-box;
}

input[type=submit] { 
    width:100%; 
    padding:10px; 
    background-color:#cc0000; 
    color:white; 
    border:none; 
    border-radius:5px; 
    cursor:pointer; 
}

form label {
    display: block;
    margin-top: 10px;
    margin-bottom: 5px;
}
</style>
</head>
<body>
<div class="container">
<h2>Login</h2>
<form method="post" action="logincheck.php">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login">
</form>
</div>
</body>
</html>
