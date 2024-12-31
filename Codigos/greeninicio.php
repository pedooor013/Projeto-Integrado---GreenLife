<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location: perfil.php");
    header("Location: greeninicio.html");
    exit();
}
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/greeninicio.css">
    <title>GreenLife</title>
</head>
<body>
    <header>
        <a href="greeninicio.php"><img src="imagens/GreenLife-Sem-Fundo-Sem-Escrita 1.png" alt="Logo do GreenLife" class="logo-principal"><a>
    </header>
    <div class="pontos">
        <div class="iconIMG">
            <a href="brindes.php"> <img src="imagens/logopontos.png" alt="icon pontos" class="IconPontos"></a>
        </div>

        <h4>Seus pontos</h4>
        <h5 class="pontosUsuario">
            <?php 
        if (isset($_SESSION['usuario']['pontosUsuario'])) {
            echo $_SESSION['usuario']['pontosUsuario']; // Exibe o número de pontos
        } else {
            echo '0'; // Se não houver pontos, exibe 0
        }
        ?>
        </h5>
        

        <div class="barraPontos">
            <div class="pontosGanhos"></div>
        </div>
    </div>
    <h5 class="tituloDesafioDia">DESAFIO DIÁRIO</h5>
    <div class="desafio">
        <img src="imagens/desafiodiario.png" alt="Exemplo do desafio" width="70px">
        <div class="infoDesafio">
            <h5>REDUZA O GASTO DE LUZ</h5>
            <p>Faça a redução do consumo de luz  por 20min</p>
            <h5 class="dias">6/6</h5>
        </div>
    </div>
     <hr width="50%">
     <h5 class="noticia">NOTÍCIA</h5>
     <div class="quadNoticias">
        <div><a href="noticiaCO2.HTML"><img src="imagens/noticiaCO2.png" width="100%"><p>Emisssão de CO2</p></a></div>
        <div><a href="noticiaqueim.html"><img src="imagens/noticiaQuem.png" width="100%"><p>Queimadas</p></a></div>
        <div><a href="noticiaalag.html"><img src="imagens/noticiaAlag.png" width="100%"><p>Alagamento do RS</p></div></a>
        <div><a href="noticiarec.html"><img src="imagens/noticiaRec.png" width="100%"><p>Reciclagem</p></div></a>
        
     </div>
    <div class="spacer"></div>
        <footer>
            <div class="rodape">
               <a href="greeninicio.php"><img src="imagens/logoinicio.png" alt="home"></a> 
                <a href="greenDesafios.html"><img src="imagens/logodesafio.png" alt="desafio"> </a>
                <a href="blog.html"><img src="imagens/logoblog.png" alt="blog"></a>
                <a href="mapa.html"><img src="imagens/logomapa.png" alt="mapa"></a>
                <a href="../Codigos/php/perfil.php"><img src="imagens/logoperfil.png" alt="pessoal"></a>
            </div>
        </footer>
</body>
</html>