<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('datacenter')->nullable();
            $table->string('partition')->nullable();
            $table->string('service')->nullable();
            $table->string('silo')->nullable();
            $table->string('env')->nullable();
            $table->string('tag')->nullable();
            $table->string('build')->nullable();
            $table->string('url')->nullable();
            $table->string('result')->nullable();
            $table->string('region')->nullable();
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
        Schema::dropIfExists('repositories');
    }
}
