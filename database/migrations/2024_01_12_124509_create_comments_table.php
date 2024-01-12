<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        // Check if the table does not exist before creating it
        if (!Schema::hasTable('comments')) {
            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained();
                $table->foreignId('post_id')->constrained();
                $table->text('content');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // Drop the table if it exists
        Schema::dropIfExists('comments');
    }
}
