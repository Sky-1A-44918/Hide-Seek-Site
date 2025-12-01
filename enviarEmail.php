<?php
$mensagem = $_POST["mensagem"];

$para = "hideseekc5015@gmail.com";
$assunto = "Feedback do jogador";
$conteudo = "Mensagem:\n\n" . $mensagem;

mail($para, $assunto, $conteudo);

echo "ok";
?>
