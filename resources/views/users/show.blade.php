<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <hr>
    <table border="1" cellspacing='0' cellpadding='10'>
        <thead>
            <tr>
                <th colspan="2">User Detail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$user->user_id}}</td>
                <td rowspan="6" align="center">
                    <button type="submit" onclick="window.location.href='/users/{{$user->user_id}}/edit'">Edit</button>
                    <br><br>
                    <form action="/users/{{$user->user_id}}" method="post" valign='middle'>
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$user->user_name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <td>Roll</td>
                <td>{{$user->roll}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{$user->password}}</td>
            </tr>
        </tbody>
    </table>
    <p>Back to Main Menu → &nbsp;
        <button type="submit" onclick="window.location.href='/users'"><strong>Users List</strong></button>
    </p>
</body>
</html>
