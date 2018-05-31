<?php
require_once '../../../model/database.php';

$list_countries = getAllEntity("country");
$list_levels = getAllEntity("trek_level");

require_once '../../layout/header.php';
?>

<h1>Nouveau trek</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="country">Pays</label>
        <select id="country" name="country_id" class="form-control">
            <?php foreach ($list_countries as $country) : ?>
                <option value="<?php echo $country["id"]; ?>">
                    <?php echo $country["title"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="duration">Durée (en jours)</label>
        <input type="number" id="duration" name="duration" class="form-control">
    </div>
    <div class="form-group">
        <label for="level">Niveau</label>
        <select id="level" name="trek_level_id" class="form-control">
            <?php foreach ($list_levels as $level) : ?>
                <option value="<?php echo $level["id"]; ?>">
                    <?php echo $level["rating"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>

