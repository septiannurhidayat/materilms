<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Pastikan ada kolom title
            $table->text('description');
            $table->integer('meeting_number');
            $table->string('file_path');
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('materis');
    }
}
