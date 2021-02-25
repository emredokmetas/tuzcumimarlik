<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer("type")->default(0);
            $table->text("slug")->nullable();
            $table->text("title")->nullable();
            $table->text("keywords")->nullable();
            $table->text("description")->nullable();
            $table->text("cover")->nullable();
            $table->text("homeCover")->nullable();
            $table->enum("homeAdd", ["0", "1"])->default("0");
            $table->longText("content")->nullable();
            $table->longText("options")->nullable();
            $table->timestamps();
            $table->enum("state", ["0", "1"])->default("1");
            $table->index("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
