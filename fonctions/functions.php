<?php

if (!isset($_SESSION)) {
    session_start();
}
/**
 * Débugger une variable :
 * @param type $var (la variable à afficher)
 * @param bool $die (pour arrêter l'exécution)
 */
function debug($var, bool $die = true) {
    echo "<pre>";
print_r($var);
echo "</pre>";  
if ($die){
    die;
}
}

function currentUser() {
    if (isset($_SESSION["id"])) {
        return getOneUser($_SESSION["id"]);
    }
    return null;
}

function getHeader(string $title) {
    require_once 'layout/header.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}