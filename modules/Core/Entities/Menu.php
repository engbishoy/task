<?php

namespace Modules\Core\Entities;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $casts = [
        'sub_menu' => 'array',
        'active_routes' => 'array',
    ];
    
    public function getTitleAttribute(){
        $locale=App::getLocale();
        $cloumn='title_'.$locale;
        return $this->{$cloumn};
    }


    public function scopeBackThemeItems($query, $order='order'){
        return $query->where('type', 'back')->orderBy($order);
    }

    public function scopeFrontThemeItems($query, $order='order'){
        return $query->where('type', 'front')->orderBy($order);
    }

}
