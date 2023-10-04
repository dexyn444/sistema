<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<nav class="menu-lateral">

<div class="btn-expandir">
    <i class="bi bi-list" id="btn-exp"></i>
</div><!--btn-expandir-->

<ul>
    <li class="item-menu ativo">
        <a href="home.php">
            <span class="icon"><i class="bi bi-house-door"></i></span>
            <span class="txt-link">Home</span>
        </a>
    </li>
    <li class="item-menu">
            <a href="formulario.php">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Conta</span>
                </a>
            </li>
</ul>

</nav><!--menu-lateral-->

<section class="row">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" id="password" name="senha" placeholder="Senha" required>
            <input type="checkbox" id="showPassword"><br>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
        </section>
      
    <script src="login.js"></script>
    <script src="senha.js"></script>
</body>

