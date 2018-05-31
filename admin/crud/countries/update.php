<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$country = getOneEntity("country", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Pays</label>
        <input type="text" id="title" name="title" value="<?php echo $country["title"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control">
            <?php echo $country ["description"]; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($country["picture"])) : ?>
            <img src="../../../uploads/<?php echo $country["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $country["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>

