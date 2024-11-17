// PopUp Cadastro de Atendimento

document.addEventListener('DOMContentLoaded', function() {
    const new_atendimento = document.querySelector("#new_atendimento");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    // Abrindo o modal ao clicar no botão
    new_atendimento.onclick = function() {
        modal.showModal(); 
    }

    // Fechando o modal ao clicar no botão dentro do modal
    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP CADASTRO DE CLIENTES 
document.addEventListener('DOMContentLoaded', function() {
    const new_cliente = document.querySelector("#new_cliente");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_cliente.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP CADASTRO SETOR
document.addEventListener('DOMContentLoaded', function() {
    const new_setor = document.querySelector("#new_setor");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_setor.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP CADASTRO MOTIVO
document.addEventListener('DOMContentLoaded', function() {
    const new_motivo = document.querySelector("#new_motivo");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_motivo.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

// POPUP CADASTRO EQUIPE
document.addEventListener('DOMContentLoaded', function() {
    const new_equipe = document.querySelector("#new_equipe");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_equipe.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP TIPO ATENDIMENTO

document.addEventListener('DOMContentLoaded', function() {
    const new_tipo_atend = document.querySelector("#new_tipo_atend");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_tipo_atend.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP TIPO FUNCIONARIO - ACESSOS
document.addEventListener('DOMContentLoaded', function() {
    const new_tipo_funci = document.querySelector("#new_tipo_funci");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_tipo_funci.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

