<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <hr>
    <form action="/users" method="post">
        @csrf
        {{-- @method('post') --}}
        <fieldset style="width: fit-content">
            <legend>Add an User :&nbsp; ↓ &nbsp;</legend>
            <br>
            <label for="user_name">User Name : &nbsp;</label>
            <input type="text" name="user_name" required>
            <br><br>
            <label for="email">Email : &nbsp;</label>
            <input type="text" name="email">
            <br><br>
            <label for="phone">Phone : &nbsp;</label>
            <input type="text" name="phone">
            <br><br>
            <label for="roll">Roll : &nbsp;</label>
            <input type="text" name="roll">
            <br><br>
            <label for="password">Password : &nbsp;</label>
            <input type="text" name="password">
            <br><br><br>
            <button type="submit"><strong>Save User</strong></button>
        </fieldset>
    </form>
</body>
</html>
