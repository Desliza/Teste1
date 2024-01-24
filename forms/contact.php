<?php
$receiving_email_address = 'geral@skinnerbusiness.ao';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Se necessário, adicione validação dos campos do formulário aqui

    // Envie o e-mail
    $to = $receiving_email_address;
    $headers = "From: $email";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message";

    mail($to, $subject, $email_body, $headers);

    echo "success";
} else {
    echo "error";
}
?>

