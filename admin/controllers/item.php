<?php
require __DIR__.'/../models/catalog.php';

function item_index($pdo)
{
    $items = get_all_items_admin($pdo);
    $content = render(__DIR__ . '/../views/items.php', ['items' => $items]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Items']);
}

function item_create($pdo)
{
    if (is_post()) {
        $data = [
            'slug' => $_POST['slug'] ?? '',
            'label' => $_POST['label'] ?? '',
            'short_description' => $_POST['short_description'] ?? '',
            'content' => $_POST['content'] ?? '',
            'main_image' => $_POST['main_image'] ?? '',
            'status' => $_POST['status'] ?? 'draft',
            'category_id' => $_POST['category_id'] ?: null,
            'theme_id' => $_POST['theme_id'] ?: null,
            'skill' => $_POST['skill'] ?? '',
            'skill_fp_cost' => $_POST['skill_fp_cost'] ?: null,
            'weight' => $_POST['weight'] ?: null,
            'upgrade_material' => $_POST['upgrade_material'] ?? '',
            'base_damage' => $_POST['base_damage'] ?: 0,
        ];
        create_item($pdo, $data);
        redirect('/admin/item');
    }

    $content = render(__DIR__ . '/../views/item-edit.php', ['item' => null]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Nouvel item']);
}

function item_edit($pdo, $id)
{
    if (is_post()) {
        $data = [
            'slug' => $_POST['slug'] ?? '',
            'label' => $_POST['label'] ?? '',
            'short_description' => $_POST['short_description'] ?? '',
            'content' => $_POST['content'] ?? '',
            'main_image' => $_POST['main_image'] ?? '',
            'status' => $_POST['status'] ?? 'draft',
            'category_id' => $_POST['category_id'] ?: null,
            'theme_id' => $_POST['theme_id'] ?: null,
            'skill' => $_POST['skill'] ?? '',
            'skill_fp_cost' => $_POST['skill FP cost'] ?: null,
            'weight' => $_POST['weight'] ?: null,
            'upgrade_material' => $_POST['upgrade material'] ?? '',
            'base_damage' => $_POST['base_damage'] ?: 0,
        ];
        update_item($pdo, $id, $data);
        redirect('/admin/item');
    }

    $item = get_item_by_id_admin($pdo, $id);
    $content = render(__DIR__ . '/../views/item-edit.php', ['item' => $item]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Éditer item']);
}

function item_delete($pdo, $id)
{
    delete_item($pdo, $id);
    redirect('/admin/item');
}