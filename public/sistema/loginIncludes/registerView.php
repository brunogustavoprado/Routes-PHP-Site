<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/Login_Style.css">
    <title>Registro</title>
</head>

<body>
<main>
    <div class="container">
        <form action="" id="login-form">
            <label for="name" class="input-label">Nome completo (sem abreviações)</label>
            <input type="text" name="name" id="name" class="input-text">
            <label for="email" class="input-label">E-mail</label>
            <input type="email" name="email" id="email" class="input-text">
            <label for="cpf" class="input-label">CPF</label>
            <input type="text" name="cpf" id="cpf" class="input-text">
            <label for="phone" class="input-label">Telefone</label>
            <input type="tel" name="phone" id="phone" class="input-text">
            <button type="submit" class="button">Cadastrar</button>
        </form>
        <a href="/login"><button class="button">Já possui um cadastro?</button></a>
    </div>
</main>

</body>

</html>