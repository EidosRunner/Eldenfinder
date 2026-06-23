<?php
function get_all_tags($pdo)
{
    $sql = 'SELECT tag.*, category.label AS category_label 
            FROM tag 
            LEFT JOIN category ON tag.category_id = category.id';
    return $pdo->query($sql)->fetchAll();
}

function create_tag($pdo, $slug, $label, $category_id)
{
    $stmt = $pdo->prepare('INSERT INTO tag (slug, label, category_id) VALUES (:slug, :label, :category_id)');
    $stmt->execute(['slug' => $slug, 'label' => $label, 'category_id' => $category_id]);
}

function delete_tag($pdo, $id)
{
    $stmt = $pdo->prepare('DELETE FROM tag WHERE id = :id');
    $stmt->execute(['id' => $id]);
}