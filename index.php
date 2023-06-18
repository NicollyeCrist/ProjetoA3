<?php
session_start();
?>
<html>
<head>
    <title>Início</title>
    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/2399890.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        center {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 5px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4f0d15;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        a:hover {
            background-color: #8b0000;
        }
    </style>
</head>
<body>
    <center>
        <?php if (isset($_SESSION['nome'])) {
            echo "<h1>Olá, " . $_SESSION['nome'] . "</h1><br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
                <a href="cadastro.php">Cadastrar Usuário</a>
                <br><br>
                <a href="listar.php">Listar Usuários</a>
                <br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php">Alterar Senha</a><br>
            <a href="logout.php">Sair</a><br>
            <?php
        } else {
            ?>
            <h1>Olá, visitante!</h1> <a href="login.php">Login</a>
            <?php
        }
        ?>
    </center>
</body>
</html>
