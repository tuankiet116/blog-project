<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->foreign("user_id")->references("id")->on("users");
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->foreign("category_id")->references("id")->on("categories");
            $table->foreign("author_id")->references("id")->on("authors");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropForeign("authors_user_id_foreign");
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign("contents_author_id_foreign");
            $table->dropForeign("contents_category_id_foreign");
        });
    }
};
