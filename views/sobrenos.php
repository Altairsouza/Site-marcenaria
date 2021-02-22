<!DOCTYPE html>
<html lang="pt-br">

<head>
   <?php require_once ("../libraries/head.php");?>
    

    <title> Sobre a WEF Veículos </title><!-- toda pagina tem o seu título -->

    <meta name="description" content="é uma empresa espcializada na venda de veículos. Temos muitos anos de experiência na área."> <!-- ela vai aparecer como subtitulo ao pesquisar no google(toda pagina tem o seu subtítulo) -->

    <meta name="keywords" content="sobre a wef veículos, about wef, carros na cidade de SP"> <!-- aqui é para yaoo e bing ambos ferramenta de busca -->

   
</head>

<body>
    


<header>

<?php require_once ("../libraries/body.php"); ?>
<div class="ind-banner">
<picture>
            <source media="(max-width: 480px)" srcset="../images/sobrenos.jpg">
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/sobrenos.jpg">
            <source media="(min-width: 769px)" srcset="../images/sobrenos.jpg">
            <img src="../images/sobrenos.jpg" alt="Banner Sobre Nós "  title="Banner Sobre Nós - WEF Veículos">
        </picture>
</div>


</header>






<main >

<div class="textoresponsivo">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum laudantium tempora temporibus maxime eligendi! Aut quod velit nemo alias voluptatum magnam non obcaecati molestiae? Vel nisi in excepturi ullam aperiam?<br>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae ratione sed voluptatibus debitis quaerat. Aliquid quasi atque numquam eaque aspernatur tempore quas perferendis dolor voluptatibus, nemo, fugit tenetur beatae sed.<br>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptate vitae ipsam nemo laboriosam voluptas distinctio omnis! Quaerat ex quia autem eveniet, architecto est tempore accusantium, necessitatibus odit nesciunt cum.<br><br>
   <div id="fb-root"></div>
    <script>(function(d, s, id)
     {var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/pt_br/sdk.js#xfbml=1&version=v2.7";
   fjs.parentNode.insertBefore(js, fjs);
   }(document,'script', 'facebook-jssdk'));</script>
   
   <dvi class="fb-page" data-href="https://www.facebook.com/webdesignemfoco/" data-tabs="timeline" data-width="380" data-heigth="70"
   data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/webdesignemfoco/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/webdesignemfoo/">Webdesign em Fco</a></blockquote></dvi>
</div>


</main>





<footer>
<?php require_once ("../libraries/footer.php"); ?>
</footer>

</body>
</html>