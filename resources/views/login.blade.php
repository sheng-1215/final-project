

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <label for="user">
            Username :
        </label>
        <input type="text" name="user">
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