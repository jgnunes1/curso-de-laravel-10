// Função para excluir um registro com confirmação do usuário
function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
        if (confirm('Deseja excluir mesmo?')) {
            $.ajax({
            // URL para onde a requisição será feita
            url: rotaUrl,
            // Método HTTP usado na requisição (DELETE neste caso)
            method: 'DELETE',
            // Cabeçalhos da requisição, incluindo o token CSRF para proteção contra CSRF
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            // Dados enviados com a requisição, neste caso apenas o ID do registro a ser excluído
            data: {
                id: idDoRegistro,
            },
            // Função executada antes de enviar a requisição
            beforeSend: function() {
                // Exibe uma mensagem de carregamento usando a biblioteca blockUI
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000, // Tempo limite para exibição da mensagem (2 segundos)
                });
            },
        }).done(function(data) {
            $.unblockUI(); 
            if (data.success == true) {
                window.location.reload();
            } else {
                alert('Não foi possível excluir');
            }
          
            console.log(data);
        }).fail(function(data) {
            // Função executada quando a requisição falha
            // Remove a mensagem de carregamento
            $.unblockUI();
            // Exibe um alerta informando que a exclusão falhou
            alert('Não foi possível excluir o registro');
        });
    }
}
