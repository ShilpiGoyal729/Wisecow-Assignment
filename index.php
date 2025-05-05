<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Wisecow</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #0077cc;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello from Wisecow!</h1>
        <p>Your PHP server is up and running smoothly.</p>
        <p>You're now exposing this server to the world via Ngrok.</p>
    </div>
</body>
</html>
