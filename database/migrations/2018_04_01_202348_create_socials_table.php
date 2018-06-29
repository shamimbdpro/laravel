<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
                $table->increments('smid');
                $table->string('sm_google_plus');
                $table->string('sm_linkdin');
                $table->string('sm_printer');
                $table->string('sm_dribble');
                $table->string('sm_twitter');
                $table->string('sm_facebook');
                $table->integer('sm_status')->default(1);
                $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socials');
    }
}
