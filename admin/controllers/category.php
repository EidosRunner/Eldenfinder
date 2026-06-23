<?php
require __DIR__.'/../models/category.php';

function category_index($pdo)
{
    $categories = get_all_categories($pdo);
    $content = render(__DIR__ . '/../views/categories.php', ['categories' => $categories]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Catégories']);
}

function category_create($pdo)
{
    if (is_post()) {
        create_category($pdo, $_POST['slug'] ?? '', $_POST['label'] ?? '');
        redirect('/admin/category');
    }
    redirect('/admin/category');
}

function category_delete($pdo, $id)
{
    delete_category($pdo, $id);
    redirect('/admin/category');
}