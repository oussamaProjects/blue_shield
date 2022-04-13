<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');

            $table->string('id');
            $table->string('test_type');
            $table->string('asset');
            $table->string('asset_id');
            $table->string('subasset');
            $table->string('marka');
            $table->string('verdicta');
            $table->string('markb');
            $table->string('verdictb');
            $table->string('markc');
            $table->string('verdictc');
            $table->string('markd');
            $table->string('verdictd');
            $table->string('marke');
            $table->string('verdicte');
            $table->string('markf');
            $table->string('verdictf');
            $table->string('markg');
            $table->string('verdictg');
            $table->string('markh');
            $table->string('verdicth');
            $table->string('marki');
            $table->string('verdicti');
            $table->string('markj');
            $table->string('verdictj');
            $table->string('markk');
            $table->string('verdictk');
            $table->string('equipmnt');
            $table->string('material');
            $table->string('uv');
            $table->string('current_type');
            $table->string('current_value');
            $table->string('wtnss');
            $table->string('mfv');
            $table->string('prd_space');
            $table->string('demagnet');
            $table->string('magnet_delay');
            $table->string('revealer');
            $table->string('light_used');
            $table->string('artificial_light');
            $table->string('brightness');
            $table->string('condition');
            $table->string('part_temp');
            $table->string('added_date');
            $table->string('procces');
            $table->string('specification');
            $table->string('acceptance');
            $table->string('result');
            $table->string('pic_path');
            $table->string('filled_by');
            $table->string('status');
            $table->string('landmark');
            $table->string('pic_path1');
            $table->string('pic_path2');
            $table->string('pic_path3');
            $table->string('comment1');
            $table->string('comment2');
            $table->string('comment3');
            $table->string('comment4');
            $table->string('obsa');
            $table->string('obsb');
            $table->string('obsc');
            $table->string('obsd');
            $table->string('obse');
            $table->string('obsf');
            $table->string('obsg');
            $table->string('obsh');
            $table->string('obsi');
            $table->string('obsj');
            $table->string('obsk');

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
        Schema::dropIfExists('reports');
    }
}
