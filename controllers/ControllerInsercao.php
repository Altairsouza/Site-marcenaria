<?php
require_once("../class/ClassInsercao.php");

#receber as variaveis(id e as chave estrangeiras ja tem informação contida)
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);/* sao medidas de proteção */
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_STRING);






#instanciar a nossa classe
$objcrud=new ClassInsercao($nome,$email,$telefone,$idade);
$objcrud->InserirBD();

echo "<script>
alert('Cadastro efetuado com sucesso!');
window.location.href='../index.php';
</script>";/* depois q cadastrar ele vai voltar pra index */