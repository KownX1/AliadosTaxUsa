<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destino = "emilioperalta756@gmail.com";
    $asunto = "Nuevo mensaje desde el sitio web";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $cabeceras = "From: $correo\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";
    $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($destino, $asunto, $contenido, $cabeceras)) {
        echo "<script>alert('Mensaje enviado exitosamente.'); window.location.href='gracias.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje. Intenta más tarde.'); window.history.back();</script>";
    }
}
?>
