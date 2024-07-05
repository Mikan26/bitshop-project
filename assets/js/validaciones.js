$(document).ready(function() {
    // Esto asegura que el código se ejecuta después de que el documento está listo.
    $("form").on("submit", function(event) {
        // Detecta el evento de envío de cualquier formulario.
        let invalidFields = [];
        $(this).find("input, textarea").each(function() {
            // Itera sobre cada campo de entrada y área de texto del formulario.
            if ($.trim($(this).val()) === "") {
                // Si el campo está vacío o contiene solo espacios en blanco, agrégalo a la lista de campos inválidos.
                invalidFields.push($(this).attr("name"));
            }
        });

        if (invalidFields.length > 0) {
            // Si hay campos inválidos, previene el envío del formulario y muestra una alerta.
            event.preventDefault();
            alert("Los siguientes campos son inválidos: " + invalidFields.join(", ") + "\nNombre: Luis Veramendi");
            // Mostrará la alerta y también el autor
        }
    });
});