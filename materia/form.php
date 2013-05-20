<?php
require "../Conn.class.php";
require "Materia.model.php";


/**
 * Insert
 */
$objMateria = new MateriaModel();

/**
 * Update
 */
if(isset($_POST['id'])){
    $objMateria->carregar($_POST['id']);
}


?>
<style type="text/css">
    .input-tamanho-padrao {
        width:97%;
    }
    .centralizar-texto {
        text-align: center;
    }
    label {
        background-color: #EEEEEE;
        border-radius: 5px 5px 5px 5px;
        line-height: 30px;
    }
    .form-horizontal .control-label {
        padding-top: 0px;
        text-align: center;
        font-weight: 900;
    }
    .btn-fulia {
        width: 100px;
    }
</style>
<form class="form-horizontal inverse">
    <legend>Matérias</legend>
    <div class="control-group">
        <label class="control-label" for="frm-id">id</label>
        <div class="controls">
            <input type="text" id="frm-id" class="span1 centralizar-texto"  value="<?php echo $objMateria->id ?>"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-url">URL</label>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on">www.devfuria.com.br/</span>
                <input type="text" id="frm-url" style="width: 590px" value="<?php echo $objMateria->url ?>"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-titulo">Título</label>
        <div class="controls">
            <input id="frm-titulo" type="text" class="input-tamanho-padrao" value="<?php echo $objMateria->titulo ?>"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-resumo">Resumo</label>
        <div class="controls">
            <textarea rows="6" id="frm-resumo" class="input-tamanho-padrao"><?php echo $objMateria->resumo ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-keywords">Keywords</label>
        <div class="controls">
            <textarea rows="3" id="frm-keywords" class="input-tamanho-padrao"><?php echo $objMateria->keywords ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-nivel">Nível</label>
        <div class="controls">
            <select id="frm-nivel">
                <option value=""></option>
                <option value="basico">Básico</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-secao">Seção</label>
        <div class="controls">
            <select id="frm-secao" >
                <option value=""></option>
                <option value="php">PHP</option>
                <option value="js">JS</option>
                <option value="html-css">HTML & CSS</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-autor">Autor</label>
        <div class="controls">
            <select id="frm-autor">
                <option value=""></option>
                <option value="Flávio">Flávio</option>
                <option value="Alexandre">Alexandre</option>
                <option value="Micheletti">Micheletti</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-dt-criacao">Data de criação</label>
        <div class="controls">
            <input type="text" id="frm-dt-criacao" class="span2 centralizar-texto" value="<?php echo $objMateria->dt_criacao ?>"/>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-dt-atualizacao">Data de atualização</label>
        <div class="controls">
            <input type="text" id="frm-dt-atualizacao" class="span2 centralizar-texto" value="<?php echo $objMateria->dt_atualizacao ?>" />
            <div id="datepicker"></div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="frm-ordem">Ordem</label>
        <div class="controls">
            <input type="text" id="frm-ordem" class="span1 centralizar-texto" value="<?php echo $objMateria->ordem ?>"/>
        </div>
    </div>
    <div class="control-group">
        <div class="controls pull-right">
            <button type="button" id="ctr-acao-excluir" class="btn-fulia btn btn-danger">Excluir</button>
            <button type="button" id="ctr-acao-cancelar" class="btn-fulia btn">Cancelar</button>
            <button type="button" id="ctr-acao-salvar" class="btn-fulia btn btn-info">Salvar</button>
        </div>
    </div>
</form>
<div class="alert alert-error" style="display: none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Erro! </strong> <span></span>
</div>
