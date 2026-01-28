<!DOCTYPE html>
<html>
    <head>
        <title>Mystore: Homepage</title>
        <style>
            #nav_bar {
                height: 80px;
                width: 100%;
                background-color: rgb(72, 63, 118);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 30px;
                position:fixed;
                font-style: italic;
            }
            #logo img {
                height: 60px;
                width: 60px;
                margin-left: 0px;
            }
            #nav a,
            #login_register a {
                color: rgb(146, 222, 200);
                text-decoration: none;
                margin: 0 15px;
                font-size: 18px;
                font-weight: bold;
                font-style: italic;
            }
            #nav a:hover, #login_register a:hover {
                color: cornflowerblue;
            }
            #nav {
                display: flex;
                align-items: center;
            }
            #login_register {
                display: flex;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div id="nav_bar">
            <div id="logo">
                <img src="logo.png">
            </div>
            <div id="nav">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="product.html">Product</a>
            </div>
            <div id="login_register">
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
    </body>
</html>