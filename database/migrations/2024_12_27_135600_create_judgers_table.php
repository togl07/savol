<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
//$uuid = Str::uuid();

class CreateJudgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judgers', function (Blueprint $table) {
            $table->id();
            $table->string('masala');
            $table->string('uuid');
            $table->string('name');
            $table->string('short');
            $table->date('start');
            $table->date('end');
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
        Schema::dropIfExists('judgers');
    }
}
