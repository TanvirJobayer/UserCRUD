<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
</head>
<body>
    <h1>Users List</h1>
    <hr>
    <p>Clic here to add User → &nbsp;
        <button onclick="window.location.href='/users/create'" type="submit"><strong>Add User</strong></button>
    </p>
    <table border="1" cellspacing='0' cellpadding='10'>
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Roll</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{$user->user_id}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->roll}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <button type="submit" onclick="window.location.href='/users/{{$user->user_id}}'">View</button>
                    |
                    <button type="submit" onclick="window.location.href='/users/{{$user->user_id}}/edit'">Edit</button>
                    |
                    <form action="/users/{{$user->user_id}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center"><h3>- No Data Found -</h3></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
