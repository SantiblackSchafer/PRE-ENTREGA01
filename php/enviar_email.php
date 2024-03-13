<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["name"];
        $email = $_POST["email"];
        $mensaje = $_POST["message"];

        // Dirección de correo a la que se enviará el formulario
        $destinatario = "mueblesblackschafer@gmail.com";

        // Asunto del correo
        $asunto = "Nuevo mensaje de contacto desde el sitio web";

        // Cuerpo del correo
        $cuerpo = "Nombre: $nombre\n";
        $cuerpo .= "Correo electrónico: $email\n";
        $cuerpo .= "Mensaje:\n$mensaje";

        // Cabeceras del correo
        $cabeceras = "From: $email";

        // Enviar el correo
        mail($destinatario, $asunto, $cuerpo, $cabeceras);

        // Redirigir a una página de confirmación
        header("Location: confirmacion.html");
        exit;
    }
?>