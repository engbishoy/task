<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Core\Entities\Option;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->json('value')->nullable();
        });


        // Set some keys for the application
        Option::setKeyValue([
            'app_description'=>'',
            'address'=>'6',
            'phone1'=>'d',
            'phone2'=>'d',
            'email1'=>'terms',
            'email2'=>'terms',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://www.twitter.com/',
            'instgram'=>'https://www.instagram.com/',
            'youtube'=>'https://www.youtube.com/',
            'tiktok'=>'https://www.youtube.com/',
            'pinterest'=>'https://www.pinterest.com/'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
