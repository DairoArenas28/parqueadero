$('#data-table').on("click", "#editButton", function () {
    var idUser = $(this).attr("idUser");
    var data = new FormData();
    data.append("idUser", idUser);

    $.ajax({
        url: "ajax/user.ajax.php",
        method: "POST",
        data: data,
        cache: false, 
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (result) {
            // Validar que el resultado contenga los datos esperados
            if (result && result.username) {
                $('#editId').val(result.id);
                $('#editUsername').val(result.username);
                // Agrega más campos según sea necesario
                $('#editEmail').val(result.email);
                $('#editPassword').val(result.password);
            } else {
                alert("No se encontraron datos del usuario.");
            }
        },
        error: function (xhr, status, error) {
            console.error("Error en la petición AJAX:", status, error);
            console.error("Respuesta del servidor:", xhr.responseText); // Revisa la respuesta real
            alert("Hubo un error al obtener los datos del usuario.");
        }
    });
});