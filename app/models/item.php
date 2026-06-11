<?php
function get_item_by_id($pdo, $id)
{
    $sql = 'SELECT * FROM item WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}