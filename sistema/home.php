<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <title> Sistema</title>
   
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
    height: 120vh;
    width: 100vw;
    background-image: linear-gradient(rgba(29, 29, 29, 0.8), rgba(29, 29, 29, 0.8)), url(sistema.webp);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-position-y: 50px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

nav.menu-lateral{
    width: 80px;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); 
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
    background: black;

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
/* .first-section{
    position: fixed;
} */

.first-section .conteudo-principal{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}

.first-section h1{
    color:white;
    font-size: 6rem;
    text-transform: uppercase;
    margin-bottom: 1rem;
    font-family: sans-serif;
}

.first-section h2{
    color:white;
    font-size: 3rem;
    font-weight: 400;
    text-transform: uppercase;
    font-family: sans-serif;
    margin-bottom: 3rem;
}

.btn button {
    width: 230px;
    height: 60px;
    cursor: pointer;
    text-transform: uppercase;
    background-color:blue;
    border-radius: 10px;
    color:white;
    font-weight: 700;
    transition: all 400ms ease-in;
    margin-top: 5rem;
}

.btn button:hover {
    background-color: white;
    color: black;
}

.btn {
    width: 480px;
    display: flex;
    justify-content: space-between;
   
}
.whats{
    position: fixed;
    bottom: 2px;
    right: 5px;
}


footer{
    margin-top: 100px;
    height: 100%;
    background-image: linear-gradient(180deg,#180F4A,#090422,black);
    text-align: center;
    border-top: 5px solid #FF2978;
}

.logo-rodape{
    padding: 100px;
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
            <li class="item-menu">
            <a href="formulario.php">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Cadastrar</span>
                </a>
            </li>
            <li class="item-menu">
        <a href="login.php">
            <span class="icon"><i class="bi bi-gear"></i></span>
            <span class="txt-link">Sistema</span>
           
        </a>
    </li>
           
        </ul>

    </nav><!--menu-lateral-->
    <section class="first-section" id="home">
        
        <div class="conteudo-principal">
            <h1>Sistemas</h1>
            <h2>tecnologia avançada</h2>
            <div class="btn">
                <button class="reservar">contato</button>
                <button class="montar">conhecer nós</button>
            </div>
        </div>    
    </section>
    <a class="whats" target="_blank" href="https://api.whatsapp.com/send?phone=5516992163088&text=Ola%20peguei%20o%20seu%20contato%20no%20site"><img style="width: 100px;" src="whats.png" alt=""></a>
   
    

    <script src="home.js"></script>
</body>
</html>