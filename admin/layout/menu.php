<?php

require_once __DIR__ . "/../../fonctions/functions.php";

$menus = [
    [
        "label" => "Dashboard",
        "url" => ADMIN_URL,
        "icon" => "home"
    ],

    [
        "label" => "Aztrekkeurs",
        "url" => ADMIN_URL . "crud/aztrekkeurs/",
        "icon" => "users"
    ],

    [
        "label" => "Pays",
        "url" => ADMIN_URL . "crud/countries/",
        "icon" => "flag"
    ],

    [
        "label" => "Aventures",
        "url" => ADMIN_URL . "crud/aventures/",
        "icon" => "briefcase"
    ]
];
?>

<ul class="nav flex-column">

    <?php foreach ($menus as $menu) : ?>

        <li class="nav-item">

            <a class="nav-link <?php echo (currentPath() == $menu["url"]) ? "active" : ""; ?>" href="<?php echo $menu["url"]; ?>">

                <i class="fa fa-<?php echo $menu["icon"]; ?>"></i>

                <?php echo $menu["label"]; ?>

            </a>

        </li>

    <?php endforeach; ?>

</ul>
