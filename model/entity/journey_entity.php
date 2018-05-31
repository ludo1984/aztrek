<?php

function getAllJourneyByTrek(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM journey
            WHERE journey.trek_id = :id
            ORDER BY journey.num_day;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}