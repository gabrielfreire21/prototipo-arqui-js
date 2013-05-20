var app = {
    elemConteudo: $('#conteudo'),
    lista: {
        carregar: function() {
            $.post("materia/lista.php", "", function(retorno) {
                app.elemConteudo.empty().append(retorno);
                app.form.bindLinks();
            });
        }
    }, // end lista
    form: {
        btnCancelar: {},
        carregar: function(id) {
            // Update ou insert
            param = (id) ? "id=" + id : "";

            $.post("materia/form.php", param, function(retorno) {
                app.elemConteudo.empty().append(retorno);
                app.form.setBtnCancelar();

            });
        },
        bindLinks: function() {
            // Espara-se que "app.elemConteudo" seja a tabela (lista)
            var tabela = app.elemConteudo,
                links  = tabela.find('a');

            links.each(function() {
                var tr = $(this).parent().parent(),
                    id = tr.attr('id').split("-")[1];

                $(this).click(function() {
                    app.form.carregar(id);
                });
            });
        },
        setBtnCancelar: function() {
            this.btnCancelar = $('#ctr-acao-cancelar');
            this.btnCancelar.click(function() {
                app.lista.carregar();
            });

        }
    }// end form

};//end materia

app.lista.carregar();


