<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "votre.email@domaine.com";  // Remplacez par votre adresse email
    $subject = "Message de votre portfolio de la part de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Votre message a été envoyé avec succès.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Échec de l\'envoi du message. Veuillez réessayer.'); window.location.href='index.html';</script>";
    }
}
?>
