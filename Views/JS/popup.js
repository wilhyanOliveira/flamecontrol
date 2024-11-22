document.addEventListener('DOMContentLoaded', function() 
{
    const new_atendimento_clie = document.querySelector("#new_atendimento_clie");
    const modal = document.querySelector("dialog");
    const buttonClose = document.querySelector("#close_modal");

    new_atendimento_clie.onclick = function() {
        modal.showModal(); 
    }

    buttonClose.onclick = function() {
        modal.close(); 
    }
});

//POPUP CADASTRO DE CLIENTES 
document.addEventListener('DOMContentLoaded', function() 
{
    const new_cliente = document.querySelector("#new_cliente");
    const modal = document.querySelector("dialog");
    const cancela_clie = document.querySelector("#cancela_clie");

    new_cliente.onclick = function() {
        modal.showModal(); 
    }

    cancela_clie.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO SETOR
document.addEventListener('DOMContentLoaded', function() 
{
    const new_setor = document.querySelector("#new_setor");
    const modal = document.querySelector("dialog");
    const cancela_setor = document.querySelector("#cancela_setor");

    new_setor.onclick = function() {
        modal.showModal(); 
    }

    cancela_setor.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO MOTIVO
document.addEventListener('DOMContentLoaded', function() {
    const new_motivo = document.querySelector("#new_motivo");
    const modal = document.querySelector("dialog");
    const cancela_motivo = document.querySelector("#cancela_motivo");

    new_motivo.onclick = function() {
        modal.showModal(); 
    }

    cancela_motivo.onclick = function() {
        modal.close(); 
    }
});

//POPUP CADASTRO STATUS
document.addEventListener('DOMContentLoaded', function() {
    const new_status = document.querySelector("#new_status");
    const modal = document.querySelector("dialog");
    const cancela_status = document.querySelector("#cancela_status");

    new_status.onclick = function() {
        modal.showModal(); 
    }

    cancela_status.onclick = function() {
        modal.close(); 
    }
});

// POPUP CADASTRO MOTIVO DE ATENDIMENTO
document.addEventListener('DOMContentLoaded', function() {
    const new_motivo = document.querySelector("#new_motivo");
    const modal = document.querySelector("dialog");
    const cancela_motivo = document.querySelector("#cancela_motivo");

    new_motivo.onclick = function() {
        modal.showModal(); 
    }

    cancela_motivo.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

// POPUP CADASTRO DIFICULDADE DE ATENDIMENTOS
document.addEventListener('DOMContentLoaded', function() {
    const new_dificuldade = document.querySelector("#new_dificuldade");
    const modal = document.querySelector("dialog");
    const cancela_dificuldade = document.querySelector("#cancela_dificuldade");

    new_dificuldade.onclick = function() {
        modal.showModal(); 
    }

    cancela_dificuldade.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

// POPUP CADASTRO EQUIPE
document.addEventListener('DOMContentLoaded', function() {
    const new_equipe = document.querySelector("#new_equipe");
    const modal = document.querySelector("dialog");
    const cancela_equipe = document.querySelector("#cancela_equipe");

    new_equipe.onclick = function() {
        modal.showModal(); 
    }

    cancela_equipe.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP TIPO ATENDIMENTO

document.addEventListener('DOMContentLoaded', function() {
    const new_tipo_atend = document.querySelector("#new_tipo_atend");
    const modal = document.querySelector("dialog");
    const cancela_tipo = document.querySelector("#cancela_tipo");

    new_tipo_atend.onclick = function() {
        modal.showModal(); 
    }

    cancela_tipo.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP TIPO FUNCIONARIO - ACESSOS
document.addEventListener('DOMContentLoaded', function() {
    const new_tipo_funci = document.querySelector("#new_tipo_funci");
    const modal = document.querySelector("dialog");
    const cancela_tipo_funci = document.querySelector("#cancela_tipo_funci");

    new_tipo_funci.onclick = function() {
        modal.showModal(); 
    }

    cancela_tipo_funci.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO DE FUNCIONARIO 
document.addEventListener('DOMContentLoaded', function() {
    const new_funcionario = document.querySelector("#new_funcionario");
    const modal = document.querySelector("dialog");
    const cancela_clie = document.querySelector("#cancela_clie");

    new_funcionario.onclick = function() {
        modal.showModal(); 
    }

    cancela_clie.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});
