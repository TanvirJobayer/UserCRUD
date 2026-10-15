<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <hr>
    <form action="/users/{{$user->user_id}}" method="post">
        @csrf
        @method('put')
        <fieldset style="width: fit-content">
            <legend>Edit User :&nbsp; ↓ &nbsp;</legend>
            <br>
            <label for="user_name">User Name : &nbsp;</label>
            <input type="text" name="user_name" value="{{$user->user_name}}" required>
            <br><br>
            <label for="email">Email : &nbsp;</label>
            <input type="text" name="email" value="{{$user->email}}">
            <br><br>
            <label for="phone">Phone : &nbsp;</label>
            <input type="text" name="phone" value="{{$user->phone}}">
            <br><br>
            <label for="roll">Roll : &nbsp;</label>
            <input type="text" name="roll" value="{{$user->roll}}">
            <br><br>
            <label for="password">Password : &nbsp;</label>
            <input type="text" name="password" value="{{$user->password}}">
            <br><br><br>
            <button type="submit"><strong>Update User</strong></button>
        </fieldset>
    </form>
</body>
</html>
