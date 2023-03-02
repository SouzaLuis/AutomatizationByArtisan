<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="">Username</label>
        <input type="text" name="username">

        <label for="">Email</label>
        <input type="email" name="email">

        <label for="">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Submit">
    </form>
</body>
</html>