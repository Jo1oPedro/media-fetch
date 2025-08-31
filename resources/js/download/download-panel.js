import $ from 'jquery';

$(function () {
    $("#download-form button").on("click", function (e) {
        e.preventDefault();

        let url = $("#download-form input[type='url']").val();

        if(!url || !url.startsWith("http")) {
            alert("Por favor, insira uma URL válida.");
            return;
        }

        $.ajax({
            url: "/api/downloads",
            method: "POST",
            data: {
                url: url,
                _token: $("meta[name='csrf-token']").attr("content")
            },
            success: function (response) {
                console.log(response.message);
                alert("URL salva com sucesso!");
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                alert("Erro ao salvar a URL.");
            }
        });
    });
});
