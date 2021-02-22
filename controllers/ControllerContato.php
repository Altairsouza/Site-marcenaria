
<?php



require_once("../class/PHPMailer-master/src/OAuth.php");

#receber as variaveis(id e as chave estrangeiras ja tem informação contida)
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$mensagem=filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);






#instaniar a nossa classe
$mail = new PHPMailer(true);
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->IsSMTP(); // enable SMTP
   $mail->Host = 'mail.webdesignemfoco.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'usuario';
   $mail->Password = 'senha';
   $mail->Port = 587;
   $mail->setFrom($email, $nome);
    $mail->AddAddress("altai.kof@gmail.com");
    $mail->isHTML(true);
    $mail->subjet = 'contato do site';
    $mail->body ="
    <strong>contato do site<strong><br>
    Nome: $nome <br>
    Email: $email <br>
    telefone: $telefone <br>
    Mensagem: $mensagem <br>
    
    ";
 if($mail->Send()) {
   echo "<script> 
   alert('Email enviado com sucesso');
   window.location.href='../index.php';

</script>";/* depois q cadastrar ele vai voltar pra pagina index */
 } else {
    echo "<script> 
    alert('houve uma falha!');
    window.location.href='../contato.php';

</script>";/* depois q cadastrar ele vai voltar pra pagina index */
 }
?>




