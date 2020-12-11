<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/exura-vitta/public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/exura-vitta/public/assets/styles/sign-in.css">

    <title>Entrar</title>
</head>
<body>
    <div class="sign-in-card">
        <img 
            class="main-logo"
            alt="Logo Principal Exura Vitta"
            src="/exura-vitta/public/assets/images/logo.png"
        />

        <form method="POST" class="sign-in-form" action="/exura-vitta/src/scripts/general/sign-in.php">
            <input
                type="text"
                class="sign-in-input"
                placeholder="Nome de usuário"
                name="username"
            />
            <input
                type="password"
                class="sign-in-input"
                placeholder="Senha"
                name="password"
            />

            <input
                type="submit"
                class="sign-in-button"
                value="Entrar"
                name="submit"
            />

            <a class="cancel-link" href="javascript:history.back()">
                Cancelar
            </a>
        </form>
    </div>
</body>
</html>