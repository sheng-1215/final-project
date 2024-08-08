

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Register Page</h1>
    <form action="/register" method="post">
        @csrf
        <label for="user">
            Username :
        </label>
        <input type="text" name="user"><br><br>

        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="pwd"><br><br>
            Password :
        </label>
        <input type="password" name="pwd"><br><br>
        @if(session()->has('error'))
            <p>{{ session('error') }}</p>
        @endif
        <input type="submit">
    </form>
</body>
</html>