<?php
$mensagem = $_POST["mensagem"];

$para = "seuemail@gmail.com";
$assunto = "Feedback do jogador";
$conteudo = "Mensagem:\n\n" . $mensagem;

mail($para, $assunto, $conteudo);

echo "ok";
?>
