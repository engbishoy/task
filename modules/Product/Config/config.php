<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'Car',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'car' => [
                'title_en' => 'Products',
                'title_ar' => 'المنتجات',
                'icon' => 'fa fa-list-alt',
                'order' => 3,
                'route'=>'product.index'
            ]
        ]
    ],

];
