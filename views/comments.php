<h4>Comments du post <?php echo $idPost?></h4>
<a href="?action=posts-list">Retour a la list des comments</a>
<table>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th>Créé le</th>
    </tr>
    <?php
    foreach($comments as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['created_at']?></td>
        </tr>
    <?php } ?>
</table>