<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'User',
    'menus' => [
        'back_menus' => [ // support many menus per module
       
            'user' => [
                'title_en' => 'Users',
                'title_ar' => 'المشرفين',
                'icon' => 'fas fa-user-shield',
                'order' => 4,
                'route'=>'users.index'
            ],
        ]

        
    ],

];
