<?php
require __DIR__.'/../models/item.php';

function item_show($pdo, $id)
{
    $data = [];
    $data['item'] = get_item_by_id($pdo, $id);
    return render('app/views/item.php', $data);
}