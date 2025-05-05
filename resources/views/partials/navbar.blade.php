<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteoblong</title>
    <style>
        /* Styling untuk navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            padding: 10px 20px;
            text-align: center;
        }
        nav a {
            color: white;
            font-size: 16px;
            text-decoration: none;
            margin: 0 15px;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #575757;
        }
        hr {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('meteoblong.index') }}">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<hr>

<!-- Konten halaman -->
<!-- ... -->

</body>
</html>
