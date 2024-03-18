function deleteRegistrPaginacao(rotaUrl, idDoRegistro) {
    if (confirm('Deseja excluir mesmo?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function() {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function(data) {
            $.unblockUI();
            console.log(data);
        }).fail(function(data) {
            $.unblockUI();
            alert('Não foi possível excluir o registro');
        });
    }
}
