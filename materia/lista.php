<?php
require "../biblio/classes/Conn.class.php";
require "../biblio/classes/HTMLcombo.php";
require "../biblio/models/Materia.model.php";

$objMateria   = new MateriaModel();
$arr_materias = $objMateria->getObjects();

?>
<table class="table">
<tr>
    <th>id</th>
    <th>título</th>
    <th>autor</th>
    <th>secao</th>
    <th>data atuali.</th>
</tr>
<?php foreach ($arr_materias as $materia): ?>
    <tr>
        <td><?php echo $materia->id ?></td>
        <td>
            <a href="#" >
                <?php echo $materia->titulo ?>
            </a>
            <input type="hidden" value="<?php echo $materia->id?>"/>
        </td>
        <td><?php echo $materia->autor ?></td>
        <td><?php echo $materia->secao ?></td>
        <td><?php echo $materia->dt_atualizacao ?></td>
    </tr>
<?php endforeach; ?>
</table>