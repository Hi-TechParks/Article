<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('article_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('publish_time')->nullable();
            $table->integer('status')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('article_issues');
    }
}
