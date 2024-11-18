$(document).ready(function() {
    $("#btn_pesquisar").click(function() {
        var cnpj = $("#pesquisar").val().trim();

        if (cnpj === "") {
            alert("Por favor, insira um CNPJ para pesquisar.");
            return;
        }

        $.ajax({
            url: 'flamecontrol/Controlers/consultas_atend/consulta_clie.php',
            method: 'POST',
            data: { cnpj: cnpj },
            success: function(response) {
                if (response != 'não encontrado') {
                    var clienteId = response;
                    window.location.href = "flamecontrol/Views/Pages/homes/home_clie.php?id=" + clienteId;
                } else {
                    alert("CNPJ não encontrado.");
                }
            },
            error: function() {
                alert("Erro ao realizar a busca.");
            }
        });
    });
});