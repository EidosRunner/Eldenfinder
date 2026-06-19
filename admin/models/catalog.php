<?php
function get_all_items_admin($pdo)
{
    $sql = 'SELECT item.*, category.label AS category_label 
            FROM item 
            LEFT JOIN category ON item.category_id = category.id';
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function get_item_by_id_admin($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM item WHERE id = :id');
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
}

function create_item($pdo, $data)
{
    $sql = 'INSERT INTO item 
            (slug, label, short_description, content, main_image, status, category_id, theme_id, skill, `skill FP cost`, weight, `upgrade material`, base_damage)
            VALUES 
            (:slug, :label, :short_description, :content, :main_image, :status, :category_id, :theme_id, :skill, :skill_fp_cost, :weight, :upgrade_material, :base_damage)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
}

function update_item($pdo, $id, $data)
{
    $sql = 'UPDATE item SET 
            slug = :slug, label = :label, short_description = :short_description, content = :content,
            main_image = :main_image, status = :status, category_id = :category_id, theme_id = :theme_id,
            skill = :skill, `skill FP cost` = :skill_fp_cost, weight = :weight, 
            `upgrade material` = :upgrade_material, base_damage = :base_damage
            WHERE id = :id';
    $data['id'] = $id;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
}

function delete_item($pdo, $id)
{
    $stmt = $pdo->prepare('DELETE FROM item WHERE id = :id');
    $stmt->execute(['id' => $id]);
}