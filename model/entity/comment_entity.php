<?php

function getAllCommentsByTrek(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                comment.id,
               DATE_FORMAT(comment.date_creation, '%d-%m-%Y') AS date_creation,
                comment.title,
                comment.content
            FROM comment
            WHERE comment.trek_id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

