<!DOCTYPE html>
<html>

<head>
    <title>Your E-commerce Store</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
        }

        main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .product-image {
            max-width: 300px;
            margin-bottom: 20px;
            animation: slideIn 1s ease-in-out infinite alternate;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-50px);
                opacity: 0;
            }

            50% {
                transform: translateY(40px);
                opacity: 1;
            }

            100% {
                transform: translateX(10px);
                opacity: 1;
            }
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .content-item {
            flex-basis: 300px;
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .content-item:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .content-item {
                flex-basis: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .content-item {
                flex-basis: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Your E-commerce Store</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">Cart</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>

    <main>
        <h2>Welcome to Your E-commerce Store!</h2>
        <p>Discover a wide range of products from multiple sellers.</p>

        <div class="content">
            <div class="content-item">
                <img class="product-image"
                    src="https://img.freepik.com/free-vector/online-shopping-landing-page_33099-1725.jpg?size=626&ext=jpg"
                    alt="Product Image">
                <h3>Product 1</h3>
                <p>Ecommerce is a method of buying and selling goods and services online. The definition of ecommerce
                    business can also include tactics like affiliate marketing.</p>
            </div>
            <div class="content-item">
                <img class="product-image"
                    src="https://img.freepik.com/free-vector/online-shopping-concept-landing-page_52683-22153.jpg?size=626&ext=jpg"
                    alt="Product Image">
                <h3>Product 2</h3>
                <p>Ecommerce is a method of buying and selling goods and services online. The definition of ecommerce
                    business can also include tactics like affiliate marketing.</p>
            </div>
            <div class="content-item">
                <img class="product-image"
                    src="https://img.freepik.com/free-photo/black-friday-elements-assortment_23-2149074075.jpg?size=626&ext=jpg&ga=GA1.1.377460580.1687495953&semt=ais"
                    alt="Product Image">
                <h3>Product 3</h3>
                <p>Ecommerce is a method of buying and selling goods and services online. The definition of ecommerce
                    business can also include tactics like affiliate marketing.</p>
            </div>
            <div class="content-item">
                <img class="product-image" src="https://blog.hubspot.com/hubfs/ecommerce%20marketing.jpg"
                    alt="Product Image">
                <h3>Product 4</h3>
                <p>Ecommerce is a method of buying and selling goods and services online. The definition of ecommerce
                    business can also include tactics like affiliate marketing.</p>
            </div>
        </div>
    </main>

    <footer>
        &copy; 2023 Your E-commerce Store. All rights reserved.
    </footer>
</body>

</html>