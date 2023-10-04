<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <title>Formulário | GN</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
         fieldset{ 
            border: 1px solid white; 
         }
        legend{
            background-color: black;
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: blue;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Outfit', sans-serif;
}

body{
    height: 100vh;
    background-image: url("sistema.webp");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

nav.menu-lateral{
    width: 80px;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); 
    padding: 40px 0 40px 1%;
    box-shadow: 2px 0 0 #000000;
    position: fixed;
    top: 0;
    left: 0;
    overflow: hidden;
    transition: .5s;
}

nav.menu-lateral.expandir{
    width: 300px;
}

.btn-expandir{
    width: 100%;
    padding-left: 10px;
}

.btn-expandir > i{
    color: #fff;
    font-size: 24px;
    cursor: pointer;
}

ul{
    height: 100%;
    list-style-type: none;
}

ul li.item-menu{
    transition: .2s;
}

ul li.ativo{
    background-color: blue;
}

ul li.item-menu:hover{
    background: #000000;
}

ul li.item-menu a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    padding: 20px 4%;
    display: flex;
    margin-bottom: 20px;
    line-height: 40px;
}

ul li.item-menu a .txt-link{
    margin-left: 70px;
    transition: .5s;
    opacity: 0;
}

nav.menu-lateral.expandir .txt-link{
    margin-left: 40px;
    opacity: 1;
}

ul li.item-menu a .icon > i{
    font-size: 30px;
    margin-left: 10px;
}
    </style>
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
    
</ul>

</nav><!--menu-lateral-->
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <!-- <fieldset> -->
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" id="password" name="senha" class="inputUser"value=<?php echo $senha;?> required>
            <input type="checkbox" id="showPassword"> Mostrar senha<br>
            <label for="nome" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            <!-- </fieldset> -->
        </form>
    </div>
    <script src="login.js"></script>
    <script src="senha.js"></script>
</body>
</html>