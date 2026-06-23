<?php
require __DIR__.'/../models/tag.php';
require __DIR__.'/../models/category.php';

function tag_index($pdo)
{
    $tags = get_all_tags($pdo);
    $categories = get_all_categories($pdo);
    $content = render(__DIR__ . '/../views/tags.php', ['tags' => $tags, 'categories' => $categories]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Tags']);
}

function tag_create($pdo)
{
    if (is_post()) {
        create_tag($pdo, $_POST['slug'] ?? '', $_POST['label'] ?? '', $_POST['category_id'] ?? null);
        redirect('/admin/tag');
    }
    redirect('/admin/tag');
}

function tag_delete($pdo, $id)
{
    delete_tag($pdo, $id);
    redirect('/admin/tag');
}