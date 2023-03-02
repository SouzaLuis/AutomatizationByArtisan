<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <table>
        <tr>
            <td>#ID</td>
            <td>NAME</td>
            <td>E-MAIL</td>
            <td>ACTIONS</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.show', ['user'=>$user->id]) }}">See user</a>
                    <form action="{{ route('user.destroy', ['user'=>$user->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>