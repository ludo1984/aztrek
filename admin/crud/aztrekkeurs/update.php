<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$user = getOneEntity("user", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier utilisateur</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pseudo">Pseudonyme</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo $user["pseudo"]; ?>" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($user["picture"])) : ?>
            <img src="../../../uploads/<?php echo $user["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>

