<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi am an user.</h1>
    <h1>Hi am an user{{ $name }}</h1>
    <p>Name: {{ $users['name'] }}</p>
    <p>Email: {{ $users['email'] }}</p>
    <p>Phone:{{ $users['phone'] }}</p>

    <h2><x-header  data="this this me" /></h2>
</body>
</html>