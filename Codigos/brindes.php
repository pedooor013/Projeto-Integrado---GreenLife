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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/brindes.css">
    <title>GreenLife</title>
</head>

<body>
    <header>
        <a href="greeninicio.php"><img src="imagens/GreenLife-Sem-Fundo-Sem-Escrita 1.png" alt="Logo do GreenLife"
                class="logo-principal"><a>
    </header>
    <div class="pontos">
        <div class="iconIMG">
            <a href="brindes.html"> <img src="imagens/logopontos.png" alt="icon pontos" class="IconPontos"></a>
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
    <hr width="50%">
    <h4 class="titulo-brinde">BRINDES</h4>
    <div class="itensBrinde">
        <div class="brinde">
            <a href="produto.html">
                <img src="imagens/camisetaecologica.png" alt="camisaEcologica" width="70%">
                <h4 class="nomeBrinde">Camiseta Ecologica</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>150</h5>
                </div>
            </a>
        </div>
        <div class="brinde">
            <a href="produtocurso.html">
                <img src="imagens/cuidadordeidosos.png" alt="CursoCuidador" class="brindeCursos" h>
                <h4 class="nomeBrinde">Curso: Cuidador de Idosos</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>1500</h5>
                </div>
            </a>
        </div>
        <div class="brinde">
            <a href="produtobambu.html">
                <img src="imagens/kitbambu.png" alt="kitBambu">
                <h4 class="nomeBrinde">Kit 4 Utensilios de Bambu</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>100</h5>
                </div>
            </a>
        </div>
        <div class="brinde">
            <a href="produtoeco.html">
                <img src="imagens/ecobag.png" alt="Ecobag" height="">
                <h4 class="nomeBrinde">Ecobag</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>230</h5>
                </div>
            </a>
        </div>
        <div class="brinde">
            <a href="produtoenfe.html">
                <img src="imagens/cursoEnfermeira.jpg" alt="cursoEnfermagem" class="brindeCursos">
                <h4 class="nomeBrinde">50% Curso: Tecnico em Enfermagem</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>1800</h5>
                </div>
            </a>
        </div>
        <div class="brinde">
            <a href="produtovaso.html">
                <img src="imagens/vaso.png" alt="vasoGroot">
                <h4 class="nomeBrinde">Vaso Groot</h4>
                <div class="pontosBrinde">
                    <img src="imagens/logomoeda.webp" alt="pontosNecessarios" class="moedaPonto">
                    <h5>300</h5>
                </div>
            </a>
        </div>
    </div>
    <div class="spacer"></div>
    <footer>
        <div class="rodape">
            <a href="greeninicio.php"><img src="imagens/logoinicio.png" alt="home"></a>
            <a href="greenDesafios.html"><img src="imagens/logodesafio.png" alt="desafio"> </a>
            <a href="blog.html"><img src="imagens/logoblog.png" alt="blog"></a>
            <a href="mapa.html"><img src="imagens/logomapa.png" alt="mapa"></a>
            <a href="php/perfil.php"><img src="imagens/logoperfil.png" alt="pessoal"></a>
        </div>
    </footer>
</body>

</html>