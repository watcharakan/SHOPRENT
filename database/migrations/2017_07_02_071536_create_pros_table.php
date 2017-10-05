<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->enum('type', ['dresses', 'skirt', 'pants', 'mix', 'bag', 'shoes', 'accessories']);
            $table->enum('subtype', ['d_evening', 'd_chiffon', 'd_lace', 'd_work', 'sk_long', 'sk_jeans', 'sk_short', 'sk_buff', 'p_legging', 'p_skirt', 'p_short', 'p_jeans', 'p_skin', 'm_d_s', 'm_s_s', 'm_s_p', 'b_handbag','b_mailbag','b_wallet','b_backpack','b_buff','b_phone','b_luggage','b_multi','s_boot','s_sneakers','s_heel','s_fashion','s_other','a_jew','a_wig','a_cap', 'a_eye','a_acces','a_hair','a_cold','c_other']);
            $table->binary('image') ; 
            $table->integer('price');
            $table->integer('deposit');
            $table->string('detail', 1000);
            $table->integer('day');
            $table->integer('mulct');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pros');
    }
}
