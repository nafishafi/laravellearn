<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">blog</a>
    <a href="/contact">contact</a>
    <h1>Halaman About</h1>
    {{-- <h3>Owner: <?php echo $nama; ?></h3> --}}
    <h3>Owner: {{ $nama }} </h3>
    <img src="img/laravel_logo.png" alt="Logo Laravel" width="200">
</body>
</html>