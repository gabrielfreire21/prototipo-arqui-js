var app = {
    elemConteudo: $('#conteudo'),
    lista: {
        carregar: function() {
            $.post("materia/lista.php", "", function(retorno) {
                app.elemConteudo.empty().append( retorno );
                app.form.bindLinks();
            });
        }
    },// end lista
    form: {
        carregar: function(id){
            // Update ou insert
            param = (id) ? "id="+id : "";
            
            $.post("materia/form.php", param, function(retorno) {
                app.elemConteudo.empty().append( retorno );                
            });
        },
        bindLinks: function(){
            // Espara-se que "app.elemConteudo" seja a tabela (lista)
            var tabela = app.elemConteudo,
                links  = tabela.find('a');
        
            links.each(function(){
                var tr = $(this).parent().parent(),
                    id = tr.attr('id').split("-")[1];
                
                $(this).click(function(){
                    app.form.carregar(id);
                });
            });
        }
    }
    
    
};
app.lista.carregar();


