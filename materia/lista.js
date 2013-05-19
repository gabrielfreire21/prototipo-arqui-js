var app = {
    lista: {
        elem: $("table"),
        carregar: function() {
            var me= this;
            
            $.post("materia/lista.php", "", function(retorno) {
                me.elem.empty().append( retorno );
            });
        }
    }
};
app.lista.carregar();


