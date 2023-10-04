<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
   
    <title>Formulário </title>
    <!DOCTYPE html>
<html>
<head>
    <title>Página de Login com Senha Forte</title>
</head>
<body>
   
</body>
</html>

   
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
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            width: 20%;
        }
        fieldset{
            border: 1px solid white;
        }
        legend{
            background-color: rgba(0, 0, 0, 0.6);
            border: solid 1px white;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
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
            font-size: 10px;
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
            font-size: 10px;
            color: blue;
        }
        #data_nascimento{
            border: none;
            background-color: white;
            color: black;
            padding: 5px;
            border-radius: 5px;
            outline: none;
            font-size: 12px;
        }
        #submit{
            background-color: black;
            width: 100%;
            align-items: center;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        #submit:hover{
            background-color: blue
        }
    </style>
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');

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
    <script src="home.js"></script>

    
    <div class="box">
        <form action="formulario.php" method="POST">
             <!-- <fieldset>  -->
                <legend><b>Cadastrar</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="password" id="password" name="senha" class="inputUser"  required>
            <input type="checkbox" id="showPassword"><br>
            <label for="nome" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
             <!-- </fieldset>  -->
        </form>
    </div>
    <script src="form.js"></script>
</body>
</html>