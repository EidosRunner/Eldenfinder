<?php

function admin_index($pdo)
{
    $content = render(__DIR__ . '/../views/dashboard.php', []);
    return render(__DIR__ . '/../views/_layout.php', ['page_content' => $content, 'page_title' => 'Dashboard']);
}