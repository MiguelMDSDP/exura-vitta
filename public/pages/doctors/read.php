<?php
// ini_set('include_path', ini_get('include_path').':'.$_SERVER['DOCUMENT_ROOT'].'/exura-vitta');
// include_once('/src/scripts/controllers/doctor.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exura-vitta/public/assets/styles/read.css">
    <link rel="shortcut icon" href="/exura-vitta/public/assets/images/favicon.ico" type="image/x-icon">
    <title>Médicos | Exura Vitta</title>
</head>
<body>
    <nav class="menu">
        <ul class="menu-items-container">
            <li class="menu-item">
                <a href="/exura-vitta/public/pages/home.php">Início</a>
            </li>
            <li class="menu-item-active">
                Médicos
            </li>
            <li class="menu-item">
                <a href="/exura-vitta/public/pages/laboratories/read.php">Laboratórios</a>
            </li>
            <li class="menu-item">
                <a href="/exura-vitta/public/pages/patients/read.php">Pacientes</a>
            </li>
            <li class="menu-item">
                <a href="/exura-vitta/public/pages/appointments/read.php">Consultas</a>
            </li>
            <li class="menu-item">
                <a href="/exura-vitta/public/pages/exams/read.php">Exames</a>
            </li>
            <li class="menu-item">
                <a href="/exura-vitta/src/scripts/general/sign-out.php">Sair</a>
            </li>
        </ul>
    </nav>
    <main class="main-section">
        <h1 class="title-test">Olá, mundo! Médicos aqui!</h1>
    </main>
</body>
</html>