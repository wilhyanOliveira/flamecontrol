document.addEventListener('DOMContentLoaded', function() {

    const btnPesquisar = document.getElementById('btn_pesquisar'); 
    const inputPesquisar = document.getElementById('pesquisar'); 

    btnPesquisar.addEventListener('click', function() 
    {
        const cnpj = inputPesquisar.value.trim(); 
        if (cnpj === "") {
            alert("Por favor, insira um CNPJ para pesquisar.");
            return;
        }

        fetch('http://localhost/flamecontrol/Controlers/consultas_atend/consulta_clie.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                cnpj: cnpj 
            })
        })
        .then(response => response.text()) 
        .then(data => {
           
            if (data !== 'não encontrado' && data !== 'CNPJ inválido') 
            {

                window.location.href = "http://localhost/flamecontrol/Views/Pages/homes/home.php?id=" + data;
            } else 
            {
                
                alert("CNPJ não encontrado.");
            }
        })
        .catch(error => {
            
            alert("Erro ao realizar a busca.");
            console.error('Erro:', error);
        });
    });
});