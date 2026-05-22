<?php

function catalog_detail()
{
  
    $data = [
        'page_title' => 'Ma lib de singe',
        'items' => [
            [
                'id'=> 1,
                'label' => 'bouteille'
                ],
                [
                    'id'=> 2,
                    'label' => 'chat'
                    ],
                    ]
                    ];

    return render('app/views/catalog.php', $data);
}