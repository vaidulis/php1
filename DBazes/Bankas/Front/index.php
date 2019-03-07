
<nav>
<form action="/?page=destroy" method="POST">
<input type="hidden" name="csrf" value="<?= $csrf ?>">
<ul>
<?php
foreach ($notes as $note) { ///cia viskas tiesiog nukopinta
?>
    <li>
        <?=$note->pavadinimas?>
        <a href="<?=URL.'/?page=show&file_by_name='.$note->pavadinimas?>">Perziureti</a>
        <a href="<?=URL.'/?page=edit&file_by_name='.$note->pavadinimas?>">Redaguoti</a>
        <button name="delete" value="<?=$note->pavadinimas?>">Trinti</button>
    
    
    </li>
<?php
}
?>
</ul>
</form>
<nav>