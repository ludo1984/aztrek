<?php
require_once 'fonctions/functions.php';
require_once 'model/database.php';

// Déclaration des variables
// $list_projects = getAllProjects(3);

$list_countries = getAllCountries();

getHeader("Accueil");
?>

<main id="main">
    <section id="main-recherche">
        <h1>En route pour l'aventure humaine !</h1>
        <div class="opacity">

            <form class="barre-recherche" action="#" method="get">
                <input type="text" autocomplete="on" name="keywords" value="" placeholder="Ex : Mexique, volcans, coutume...">
            </form>
            <form class="date-depart" action="#" method="get">
                <input type="text" id="datepicker" placeholder="Date de départ">
                <button class="btn-search" type="submit" name="submit-btn"><i aria-hidden="true"></i>Rechercher</button>
            </form>
        </div>
    </section>

    <section id="main-aventure">

        <article id="intro-aventures">
            <h2>nos chouettes aventures</h2>
            <p><strong>Partez à la découverte de l’Amérique Centrale !</strong></p>
            <p>On vous propose 5 pays fantastiques à explorer grâce à nos parcours de trekking adaptés à tous les niveaux, du débutant à l’expert...</p>

            <div class="btn"><a href="#">je découvre les parcours</a></div>
        </article>

        <?php foreach ($list_countries as $country) : ?>
        <article class="bloc-pays">
            <a href="country.php?id=<?php echo $country["id"]; ?>"><h3><?php echo $country["title"]; ?></h3>
                
                <p><?php echo $country["nb_trek"]; ?> parcours</p></a>
            
            <a href="#"><img src="uploads/<?php echo $country["picture"]; ?>"></a>
        </article>
        <?php endforeach; ?>

    </section>

    <section id="main-coup-de-pouce">
        <div class="white">
            <h2>besoin d'un coup de pouce pour choisir votre aventure ?</h2>
         
            <div class="btn"><a href="#">je fais l'aztrequiz !</a></div>
            <div class="btn"><a href="#">je demande conseil aux aztrekkeurs !</a></div>
        </div>
    </section>

    <section id="main-carnet">

        <section id="hello-aztrekkeurs">

            <article id="intro-aztrekkeurs">
                <h3 class="green-cartouche">Hello les Aztrekkeurs !</h3>
                <p><strong>Vous avez vécu une chouette aventure ?</strong> </p>
                <p>Partagez vos anecdotes, vos astuces, vos photos et vos vidéos :)</p>
                <ul>
                    <li><a href="#"><img src="./images/p-commentaire.png" alt="illustration d'une bulle de dialogue">
                            <p>Tous les <br> commentaires</p></a></li>
                    <li><a href="#"><img src="./images/p-photos.png" alt="illustration d'une photo">
                            <p>Toutes les <br> photos</p></a></li>
                    <li><a href="#"><img src="./images/p-video.png" alt="illustration d'une vidéo">
                            <p>Toutes les <br> vidéos</p></a></li>
                </ul>
            </article>

            <article class="avis">
                <h4>Ma chouette aventure au <span class="corail-gras">MEXIQUE  : Trésors du yucCatan</span></h4>
                <p>par John D., le 12/04/2018</p>
          
                <p>« Des paysages époustouflants. Un super guide, Diego, qui connaît la région comme sa poche. J’ai adoré ! »</p>
            </article>

            <article class="avis">
                <h4>Ma chouette aventure au <span class="corail-gras">GUATémala  : LE MONDE PERDU</span></h4>
                <p>par Aurélie R., le 03/02/2018</p>
          
                <p>« L’ancienne citadelle maya de Tikal, en plein coeur de la forêt tropicale est à couper le souffle. J’aimerais beaucoup... »</p>
                <p class="ital-gris">Lire le commentaire complet</p>
            </article>

        </section>

        <section id="hello-nouveaux">

            <article id="intro-nouveaux">
                <h3 class="green-cartouche">Hello les petits nouveaux !</h3>
                <p><strong>Venez rêver et poser vos questions...</strong> </p>
                <p>Entre Aztrekkeurs, on s’entraide avec grand plaisir ! </p>
            </article>

            <article class="avis">
                <h4>Mon rêve d’aventure au <span class="corail-gras">Mexique : LEs volcans</span></h4>
                <p>par Céline P., le 18/04/2018</p>
          
                <p>« Je n’ai jamais fait de trekking de ma vie. Est-ce que ce parcours est adapté pour débuter ? »</p>
                <p class="ital-gris">Répondre à Céline P.</p>
            </article>

        </section>

        <section id="suivez-guide">

            <article id="intro-guide">
                <h3 class="green-cartouche">Suivez le guide !</h3>
                <p><strong>On vit de chouettes aventures grâce à nos guides qui connaissent l’Amérique Centrale par coeur.</strong> </p>
                <p>La preuve en selfies ;)</p>
            </article>

<!--            album de polaroids -->

            <div id="background">
                <div id="gallery">
                    <figure class="pic1">
                        <img src="./uploads/pola-1.jpg" />
                        <figcaption>@Antonio #Mexico</figcaption>
                    </figure>
                    <figure class="pic2">
                        <img src="./uploads/pola-6.jpg" />
                        <figcaption>@Diego #Costa Rica</figcaption>
                    </figure>
                    <figure class="pic3">
                        <img src="./uploads/pola-3.jpg" />
                        <figcaption>@Carlos #Honduras</figcaption>
                    </figure>
                    <figure class="pic5">
                        <img src="./uploads/pola-2.jpg" />
                        <figcaption>@John #Mexico</figcaption>
                    </figure>
                    <figure class="pic6">
                        <img src="./uploads/pola-7.png" />
                        <figcaption>@Carmen #Guatémala</figcaption>
                    </figure>
                    <figure class="pic7">
                        <img src="./uploads/pola-8.jpg" />
                        <figcaption>@Aztrek friends</figcaption>
                    </figure>
                    <figure class="pic8">
                        <img src="./uploads/pola-9.png" />
                        <figcaption>@Maria #Salvador</figcaption>
                    </figure>
                    <figure class="pic9">
                        <img src="./uploads/pola-10.jpg" />
                        <figcaption>#Funwithaztrek</figcaption>
                    </figure>

                </div>
            </div>

        </section>

    </section>

</main>







<?php getFooter(); ?>