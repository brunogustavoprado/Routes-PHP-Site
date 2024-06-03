

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/Login_Style.css">
    <title>Login</title>
</head>

<body>
<main>
    <div class="container">
        <form id="login-form" method="POST" action="/authenticate">

        <label for="username" class="input-label">Nome de usuário</label>
            <input type="text" name="username" id="username" class="input-text">
            <label for="password" class="input-label">Senha</label>
            <input type="password" name="password" id="password" class="input-text">
            <button type="submit" class="button">Login</button>
        </form>
        <a href="/registro"><button class="button">Ainda não possui um cadastro?</button></a>
    </div>
</main>

</body>

</html>

