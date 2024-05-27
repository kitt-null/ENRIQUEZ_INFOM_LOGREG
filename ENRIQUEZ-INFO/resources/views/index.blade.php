<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)                            
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('delete', $user)}}">Delete</a></td>
                </tr>    
            @empty
                <p>No User Found</p>
            @endforelse
        </tbody>
    </table>
    <br>
    <form method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
    

</body>
</html>