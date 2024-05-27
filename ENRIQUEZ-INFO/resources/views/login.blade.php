<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
    <form method="POST">
    @csrf
        <h1>Log In</h1>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="email@example.com">
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Log In">
    </form>
    <p>Are you new? <a href="{{route('register')}}">Register</a></p>
</body>
</html>