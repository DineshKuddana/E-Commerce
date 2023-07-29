<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .registration-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }
        .registration-form h2 {
            text-align: center;
        }
        .registration-form label {
            display: block;
            margin-bottom: 10px;
        }
        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .registration-form input[type="submit"],
        .registration-form input[type="button"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .registration-form input[type="submit"]:hover,
        .registration-form input[type="button"]:hover {
            background-color: #45a049;
        }
        .registration-form input[type="button"]{
            margin-left:17em;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <h2>User Registration</h2>
        <form action="register_process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Register">
            <input type="button" value="Login" onclick="location.href='login.php'">
        </form>
    </div>
</body>
</html>
