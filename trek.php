<?php
require_once 'fonctions/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

//Faire apparaître le pays
$id = $_GET["id"];
$trek = getOneTrek($id);
$list_journey = getAllJourneyByTrek($id);
$list_comments = getAllCommentsByTrek($id);


getHeader($trek["title"]);
?>


<h2><?php echo $trek["title"]; ?></h2>

<h4>Niveau de trekking : </h4>
<p><?php echo $trek["rating"]; ?></p>

<h4>Durée : </h4>
<p><?php echo $trek["duration"]; ?> jours</p>

<h4>Itinéraire :</h4>
<?php foreach ($list_journey as $journey) : ?>
    <article>
        <p>De <?php echo $journey["city_departure"]; ?> à <?php echo $journey["city_arrival"]; ?><p>
        <h4>Hébergement : </h4>
        <p><?php echo $journey["accommodation"]; ?></p>
    </article>
<?php endforeach; ?>

<h4>Un petit aperçu de cette chouette aventure : </h4>
<img src="uploads/<?php echo $trek["picture"]; ?>">

<h4>Les Aztrekkeurs partagent leur carnet de voyage :</h4>
<?php foreach ($list_comments as $comment) : ?>
    <article>

        <p class="gras-noir"><?php echo $comment["title"]; ?></p> 
        <p> "<?php echo $comment["content"]; ?>"</p>
        <h6> Le <?php echo $comment["date_creation"]; ?></h6>
    </article>
<?php endforeach; ?>


<?php getFooter(); ?>