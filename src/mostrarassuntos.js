

function fetchAssuntos() {
            $.ajax({
                url: 'mostrarassuntos.php',
                type: 'GET',
                success: function(data) {
                    $('#result').html(data);
                },
                error: function() {
                    alert('Erro ao buscar os dados.');
                }
            });
        }