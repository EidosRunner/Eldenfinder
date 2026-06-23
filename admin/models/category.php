<?php
function get_all_categories($pdo)
{
    return $pdo->query('SELECT * FROM category')->fetchAll();
}

function get_category_by_id($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM category WHERE id = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}

function create_category($pdo, $slug, $label)
{
    $stmt = $pdo->prepare('INSERT INTO category (slug, label) VALUES (:slug, :label)');
    $stmt->execute(['slug' => $slug, 'label' => $label]);
}

function update_category($pdo, $id, $slug, $label)
{
    $stmt = $pdo->prepare('UPDATE category SET slug = :slug, label = :label WHERE id = :id');
    $stmt->execute(['id' => $id, 'slug' => $slug, 'label' => $label]);
}

function delete_category($pdo, $id)
{
    $stmt = $pdo->prepare('DELETE FROM category WHERE id = :id');
    $stmt->execute(['id' => $id]);
}