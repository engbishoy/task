<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Category',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'category' => [
                'title_en' => 'Categories',
                'title_ar' => 'الاقسام',
                'icon' => 'fa fa-list-alt',
                'order' => 2,
                'route'=>'category.index'
            ]
        ]
    ],

];
