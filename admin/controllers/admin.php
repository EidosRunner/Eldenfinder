<?php
require __DIR__.'/../models/catalog.php';
require __DIR__.'/../models/tag.php';

function admin_index($pdo)
{
    $items = get_all_items_admin($pdo);
    $tags = get_all_tags($pdo);

    $stats = [
        'total_items' => count($items),
        'published' => count(array_filter($items, fn($i) => ($i['status'] ?? '') === 'published')),
        'total_tags' => count($tags),
        'recent_items' => array_slice($items, -5),
    ];

    $content = render(__DIR__ . '/../views/dashboard.php', $stats);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Dashboard']);
}