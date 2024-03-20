<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id")->index();
            $table->unsignedBigInteger("author_id")->index();
            $table->string("title");
            $table->text("content");
            $table->integer("sort");
            $table->timestamps();
        });
        DB::statement('ALTER TABLE contents ADD FULLTEXT `search` (`title`, `content`)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
