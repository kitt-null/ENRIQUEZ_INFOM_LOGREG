<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form method="POST">
    @csrf
        <h1>Register</h1>
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="Name">
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="email@example.com">
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Register">
    </form>
    <p>Already have an Account? <a href="{{route('login')}}">Login</a></p>
    
</body>
</html>