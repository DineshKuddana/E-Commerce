<!DOCTYPE html>
<html>
<head>
    <title>Seller Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .store-creation-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
        }
        .store-creation-form h2 {
            text-align: center;
        }
        .store-creation-form label {
            display: block;
            margin-bottom: 10px;
        }
        .store-creation-form input[type="text"],
        .store-creation-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .store-creation-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .store-creation-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="store-creation-form">
        <h2>Create Your Store</h2>
        <form action="sm_process.php" method="POST">
            <label for="store_name">Store Name:</label>
            <input type="text" name="store_name" required><br>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea><br>
            <label for="contact_details">Contact Details:</label>
            <textarea name="contact_details" required></textarea><br>
            <input type="submit" value="Create Store">
        </form>
    </div>
</body>
</html>
