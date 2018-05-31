<?php

function getAllDepartureByTrek(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM departure
            WHERE departure.trek_id = :id
            ORDER BY departure.num_day;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
