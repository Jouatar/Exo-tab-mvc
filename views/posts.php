<h2>Liste des posts</h2>
<table>
    <tr>
        <th>#</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actif ?</th>
        <th>Créé le</th>
        <th>Commentaire</th>
    </tr>
    <?php
    foreach($posts as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['active']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><a href="../index.php/?action=comments-list&post_id=<?php echo $row['id']?>">Voir</a></td>

        </tr>
    <?php } ?>
</table>
