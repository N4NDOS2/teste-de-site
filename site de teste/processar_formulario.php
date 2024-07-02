<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Configurações de email
    $to = 'nandoconceicao194@gmail.com'; // Substitua pelo seu endereço de email
    $subject = 'Nova mensagem do formulário de contato';
    $headers = "From: $name <$email>";
    $body = "Você recebeu uma nova mensagem do formulário de contato:\n\nNome: $name\nEmail: $email\nAssunto: $subject\nMensagem:\n$message";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        // Mensagem de sucesso
        echo '<p>Mensagem enviada com sucesso!</p>';
    } else {
        // Mensagem de erro
        echo '<p>Ocorreu um problema ao enviar a mensagem. Por favor, tente novamente mais tarde.</p>';
    }
}
?>