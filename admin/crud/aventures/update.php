<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$trek = getOneEntity("trek", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un trek</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Nom du trek</label>
        <input type="text" id="title" name="title" value="<?php echo $trek["title"]; ?>" class="form-control">
    </div>
     <div class="form-group">
        <label for="country">Pays du trek</label>
        <input type="text" id="country" name="country" value="<?php echo $trek["country"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="duration">Durée (en jours)</label>
        <input type="number" id="duration" name="duration" value="<?php echo $trek["duration"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($trek["picture"])) : ?>
            <img src="../../../uploads/<?php echo $trek["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $trek["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>

