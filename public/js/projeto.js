// Função para excluir um registro com confirmação do usuário
function deleteRegistrPaginacao(rotaUrl, idDoRegistro) {
    // Exibe um pop-up de confirmação para o usuário
    if (confirm('Deseja excluir mesmo?')) {
        // Se o usuário confirmar, faz uma requisição AJAX
        $.ajax({
            // URL para onde a requisição será feita
            url: rotaUrl,
            // Método HTTP usado na requisição (DELETE neste caso)
            method: 'DELETE',
            // Cabeçalhos da requisição, incluindo o token CSRF para proteção contra CSRF
            headers: {'X-CSRF-TOKEN': $(meta['name="csrf-token"]').attr('content')},
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
            // Função executada quando a requisição é bem-sucedida
            // Remove a mensagem de carregamento
            $.unblockUI();
            // Exibe os dados retornados no console (provavelmente informações sobre o registro excluído)
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
