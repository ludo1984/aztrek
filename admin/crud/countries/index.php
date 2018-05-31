<?php
require_once '../../../model/database.php';

$list_countries = getAllCountries();

require_once '../../layout/header.php';
?>

<h1>Gestion des pays</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Pays</th>
            <th>Photo</th>
            <th>Description</th>
            <th>Nombre de treks</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($list_countries as $country) : ?>
            <tr>
                <td><?php echo $country["title"]; ?></td>
                <?php $picture = (!empty($country["picture"])) ? "../../../uploads/" . $country["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td><?php echo $country["description"]; ?></td>
                <td><?php echo $country["nb_trek"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $country["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $country["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
            
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>