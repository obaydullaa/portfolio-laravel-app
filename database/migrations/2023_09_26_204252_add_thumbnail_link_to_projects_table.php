<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // php artisan make:migration add_paid_to_users_table --table=users
    // php artisan make:migration add_thumbnailLink_to_projects_table --table=projects
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('thumbnailLink', 300)->after('previewLink');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('thumbnailLink');
        });
    }
};
