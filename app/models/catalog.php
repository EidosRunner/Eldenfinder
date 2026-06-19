<?php
function get_all_items($pdo, $search = '')
{
    if ($search !== '') {
        $sql = "SELECT item.* FROM item 
                LEFT JOIN category ON item.category_id = category.id
                WHERE item.label LIKE :search1 OR category.label LIKE :search2";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'search1' => '%' . $search . '%',
            'search2' => '%' . $search . '%'
        ]);
    } else {
        $sql = 'SELECT * FROM item';
        $stmt = $pdo->query($sql);
    }
    return $stmt->fetchAll();
}