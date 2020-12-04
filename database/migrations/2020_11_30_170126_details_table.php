<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('details', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('service_id');
        $table->longText('description');
        $table->string('image')->nullable();
        $table->string('type');
        $table->string('atelier');
        $table->string('domicile');
        $table->integer('status')->default(0)->nullable();
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
    Schema::dropIfExists('details');
}
}

