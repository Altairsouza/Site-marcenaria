<!DOCTYPE html>
<html lang="pt-br">

<head>
   <?php require_once ("../libraries/head.php");?>
    

    <title>WEF Veículos - Anúncio de Veíulos em São Paulo </title>

    <meta name="description" content="A WEF veículos é uma empresa especializada em anúncios de automóveis e motos na região de São Paulo. Contamos com milhares de veículos á sua disposição"> <!-- ela vai aparecer como subtitulo ao pesquisar no google -->

    <meta name="keywords" content="WEF veículos em SP, anúncios de automóveis, veículos em SP"> <!-- aqui é para yaoo e bing ambos ferramenta de busca -->

   <script src="../libraries/jquery.cycle.lite.js"></script><!-- aqui é slide show(fazendo as imagens desaparecer e aparecer outras no lugar
   (loop)) -->
</head>

<body>
    


<header>

<?php require_once ("../libraries/body.php"); ?>

<div class="ind-slide"><!-- estou fazendo estile com imagens(primeiro cria uma div e depois um picture com todas as medias desktop tablet e smatphone) -->
<picture><!-- serve para criar imagens responsiva  primeiro para celular  tablet e desktop-->
            <source media="(max-width: 480px)" srcset="../images/carro1.jpg">
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/carro1.jpg">
            <source media="(min-width: 769px)" srcset="../images/carro1.jpg">
            <img src="../images/carro1.jpg" alt="carros"  title="carros"><!--geralmente da problema nos mobile dai tem q criar esse novo item e sempre colocar a imagem menor q é do celular -->
        </picture>


        <picture><!-- serve para criar imagens responsiva  primeiro para celular  tablet e desktop-->
            <source media="(max-width: 480px)" srcset="../images/carro2.jpg">
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/carro2.jpg">
            <source media="(min-width: 769px)" srcset="../images/carro2.jpg">
            <img src="../images/carro2.jpg" alt="carros"  title="carros"><!--geralmente da problema nos mobile dai tem q criar esse novo item e sempre colocar a imagem menor q é do celular -->
        </picture>


        
</div>

</header>






<main class="main">

<div class="ind-anuncio">
    <div class="ind-anuncio-title">Móveis Planejados</div>
    <div class="ind-anuncio-image"><img src="../images/anuncios/3.jpg"></div>
    <div class="ind-anuncio-texto">Móveis<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>

</div>

<div class="ind-anuncio">
    <div class="ind-anuncio-title">Instalação de portas</div>
    <div class="ind-anuncio-image"><img src="../images/anuncios/4.jpg"></div>
    <div class="ind-anuncio-texto">Portas<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>

</div>

<div class="ind-anuncio">
    <div class="ind-anuncio-title"> Marcenaria</div>
    <div class="ind-anuncio-image"><img src="../images/anuncios/1.jpg"></div>
    <div class="ind-anuncio-texto">Marcenaria<br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </div>

</div>

<div class="ind-anuncio">
    <div class="ind-anuncio-title">Marmoraria</div>
    <div class="ind-anuncio-image"><img src="../images/anuncios/2.jpg"></div>
    <div class="ind-anuncio-texto">Marmoraria<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>

</div>






</main>








<footer>
<?php require_once ("../libraries/footer.php"); ?>
</footer>

</body>
</html>