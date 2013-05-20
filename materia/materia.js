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
            var links = app.elemConteudo.find('a');
            links.each(function(){
                var id = $(this).siblings().val();
                $(this).click(function(){
                    app.form.carregar(id);
                });
            });
        }
    }
    
    
};
app.lista.carregar();


