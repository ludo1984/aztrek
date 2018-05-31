<?php
require_once '../../../model/database.php';

$list_treks = getAllTreks();

require_once '../../layout/header.php';
?>

<h1>Gestion des treks</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nom du trek</th>
            <th>Photo</th>
            <th>Pays</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($list_treks as $trek) : ?>
            <tr>
                <td><?php echo $trek["title"]; ?></td>
                <?php $picture = (!empty($trek["picture"])) ? "../../../uploads/" . $trek["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $trek["country"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $trek["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $trek["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
            
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>