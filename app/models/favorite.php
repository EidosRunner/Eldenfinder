<?php
function add_favorite($pdo, $user_id, $item_id)
{
    $stmt = $pdo->prepare('INSERT IGNORE INTO favorite (user_id, item_id) VALUES (:user_id, :item_id)');
    $stmt->execute(['user_id' => $user_id, 'item_id' => $item_id]);
}

function remove_favorite($pdo, $user_id, $item_id)
{
    $stmt = $pdo->prepare('DELETE FROM favorite WHERE user_id = :user_id AND item_id = :item_id');
    $stmt->execute(['user_id' => $user_id, 'item_id' => $item_id]);
}

function is_favorite($pdo, $user_id, $item_id)
{
    $stmt = $pdo->prepare('SELECT id FROM favorite WHERE user_id = :user_id AND item_id = :item_id');
    $stmt->execute(['user_id' => $user_id, 'item_id' => $item_id]);
    return $stmt->fetch() !== false;
}

function get_favorites($pdo, $user_id)
{
    $stmt = $pdo->prepare('SELECT item.* FROM favorite JOIN item ON favorite.item_id = item.id WHERE favorite.user_id = :user_id');
    $stmt->execute(['user_id' => $user_id]);
    return $stmt->fetchAll();
}