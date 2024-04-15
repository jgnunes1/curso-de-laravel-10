// Função para excluir um registro com confirmação do usuário
function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    // Verifica se o usuário confirma a exclusão
    if (confirm('Deseja excluir mesmo?')) {
        // Se confirmado, faz uma requisição AJAX para excluir o registro
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
            // Função executada quando a requisição AJAX é bem-sucedida
            $.unblockUI(); // Remove a mensagem de carregamento
            if (data.success == true) {
                // Se a exclusão for bem-sucedida, recarrega a página
                window.location.reload();
            } else {
                // Se a exclusão falhar, exibe um alerta
                alert('Não foi possível excluir');
            }
            console.log(data); // Log dos dados retornados pela requisição
        }).fail(function(data) {
            // Função executada quando a requisição falha
            // Remove a mensagem de carregamento
            $.unblockUI();
            // Exibe um alerta informando que a exclusão falhou
            alert('Não foi possível excluir o registro');
        });
    }
}
