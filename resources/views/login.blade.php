<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="/fazer-login" method="post">
        <input type="text" name="login" placeholder="login" required>
        <input type="text" name="senha" placeholder="senha" required>
        <button>ENTRAR</button>
        @csrf
    </form>

</body>

</html>