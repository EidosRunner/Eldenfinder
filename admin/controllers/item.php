<?php
require __DIR__.'/../models/catalog.php';

function admin_index($pdo)
{
    $content = render(__DIR__ . '/../views/dashboard.php', []);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Dashboard']);
}

function admin_item($pdo)
{
    $items = get_all_items_admin($pdo);
    $content = render(__DIR__ . '/../views/items.php', ['items' => $items]);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Items']);
}