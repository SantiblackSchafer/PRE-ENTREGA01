document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Formulario enviado con éxito');
});
$(document).ready(function () {
    $('#contactForm').submit(function (event) {
        event.preventDefault();

        // Obtener los datos del formulario
        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val()
        };

        // Realizar la solicitud AJAX
        $.ajax({
            type: 'POST',
            url: '../php/submit-form.php',
            data: formData,
            success: function (response) {
                // Muestra un mensaje de éxito
                alert('Formulario enviado con éxito');
                
            },
            error: function (error) {
                alert('Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo.');
            }
        });
    });
});
