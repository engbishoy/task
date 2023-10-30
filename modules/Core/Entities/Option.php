<?php

namespace Modules\Core\Entities;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    use HasFactory;
    public $timestamps = false;

    
    protected $guarded = ["id"];

    public static function getValueByKey($key){
        $instance = new static;
        return json_decode($instance->newQuery()->where('key', $key)->first()->value);
    }

    public static function setKeyValue($attributes){
        $instance = new static;
        foreach($attributes as $key => $value){
            if(Option::optionExists($key)){
                $instance->newQuery()->where('key',$key)->update([
                    'value' => json_encode($value)
                ]);
            }else{
                $instance->newQuery()->create([
                    'key' => $key,
                    'value' => json_encode($value)
                ]);
            }
        }
    }

    public static function optionExists($key){
        $instance = new static;
        return $instance->newQuery()->where('key',$key)->first() ? true : false;
    }

    public static function fullName(){
        if(Option::optionExists('first_name') && Option::optionExists('last_name')){
            return Option::getValueByKey('first_name') . ' ' . Option::getValueByKey('last_name');
        }
    }

    public function app_description(){

        $cloumn= Option::getValueByKey('app_description');
        return $cloumn;
    }


}
