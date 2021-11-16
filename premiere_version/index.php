<?php
include 'models/database.php';
$mypdo = initDatabse();
$myResul = $mypdo->query('Select * From comments;');
echo '<h1>Liste comment</h1> <table> <tr><th>id</th> <th>descrip</th> <th>postId</th> <th>created</th></tr>';
foreach($myResul as $row){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.$row[3].'</td>';
    echo '</tr>';
}
echo '</table>'
?>
