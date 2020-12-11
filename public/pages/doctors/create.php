<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/exura-vitta/public/assets/styles/create.css">
    <link rel="shortcut icon" href="/exura-vitta/public/assets/images/favicon.ico" type="image/x-icon">

    <title>Registro de Médico | Exura-Vitta</title>
</head>
<body>
    <main class="form-card">
        <img 
            class="main-logo"
            alt="Logo Principal Exura Vitta"
            src="/exura-vitta/public/assets/images/logo.png"
        />
        
        <form method="POST" class="create-form">
            <input
                type="text"
                class="create-input"
                placeholder="Nome Completo"
                name="name"
            />

            <input
                type="text"
                class="create-input"
                placeholder="Telefone"
                name="phone"
            />

            <input
                type="email"
                class="create-input"
                placeholder="E-mail"
                name="email"
            />

            <input
                type="text"
                class="create-input"
                placeholder="Especialidade"
                name="speciality"
            />

            <input
                type="text"
                class="create-input"
                placeholder="CRM"
                name="CRM"
            />

            <input
                type="text"
                class="create-input"
                placeholder="Nome de Usuário"
                name="name"
            />

            <input
                type="password"
                class="create-input"
                placeholder="Senha"
                name="password"
            />

            <input
                type="submit"
                class="create-button"
                value="Entrar"
                name="submit"
            />

            <a class="cancel-link" href="javascript:history.back()">
                Cancelar
            </a>
        </form>
    </main>
</body>
</html>