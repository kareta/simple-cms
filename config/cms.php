<?php
/**
 * Created by PhpStorm.
 * User: vitya
 * Date: 4/28/16
 * Time: 10:56 PM
 */

return [
    'theme' => [
        'folder' => 'themes',
        'active' => 'default'
    ],

    'templates' => [
        'home' => App\Templates\HomeTemplate::class,
        'blog' => App\Templates\BlogTemplate::class,
    ]
];