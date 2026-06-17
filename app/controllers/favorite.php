<?php
require __DIR__.'/../models/favorite.php';

function favorite_add($pdo, $id)
{
    if (!isset($_SESSION['user_id'])) {
        redirect('/user/login');
    }
    add_favorite($pdo, $_SESSION['user_id'], $id);
    redirect('/item/show/' . $id);
}

function favorite_remove($pdo, $id)
{
    if (!isset($_SESSION['user_id'])) {
        redirect('/user/login');
    }
    remove_favorite($pdo, $_SESSION['user_id'], $id);
    redirect('/item/show/' . $id);
}

function favorite_index($pdo)
{
    if (!isset($_SESSION['user_id'])) {
        redirect('/user/login');
    }
    $data['items'] = get_favorites($pdo, $_SESSION['user_id']);
    return render('app/views/favorite.php', $data);
}