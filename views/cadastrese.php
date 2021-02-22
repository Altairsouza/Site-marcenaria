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
            <source media="(max-width: 480px)" srcset="../images/cadastro.jpg">
            <source media="(min-width: 481px) and (max-width: 768px)" srcset="../images/cadastro.jpg">
            <source media="(min-width: 769px)" srcset="../images/cadastro.jpg">
            <img src="../images/cadastro.jpg" alt="Banner Sobre Nós "  title="Banner Sobre Nós - WEF Veículos">
        </picture>
</div>


</header>






<main >

<div class="textoresponsivo">
   Cadastre-se para obter maiores informações<br><br>
    <form name="forumalariocadastro" id="formulariocadastro" method="post" action="../controllers/controllerInsercao.php">

    <dvi class="formulario">
        <label for="nome">Nome: *</label><br>
        <input type="text" name="nome" id="nome" required><br>
    </dvi>

    <dvi class="formulario">
        <label for="email">Email: *</label><br>
        <input type="email" name="email" id="email" required><br><!-- required pq o campo é obrigatorio -->
    </dvi>

    <dvi class="formulario">
        <label for="telefone">Telefone: *</label><br>
        <input type="tel" id="telefone" name="telefone" required><br><!-- required pq o campo é obrigatorio -->
    </dvi>

    <dvi class="formulario">
        <label for="idade">Idade: *</label><br>
        <input type="text" name="idade" id="idade" required><br><!-- required pq o campo é obrigatorio -->

        <dvi class="formulario">
        <input type="submit" name="botao" id="botao"value="Cadastrar">
    </dvi>
    </dvi>
    </form>
</div>


</main>





<footer>
<?php require_once ("../libraries/footer.php"); ?>
</footer>

</body>
</html>