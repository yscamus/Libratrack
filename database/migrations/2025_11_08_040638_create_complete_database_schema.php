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
        // Creating user_types table
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });
    

        // Modifying the users table : adding foreign key 
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('user_type_id')
                  ->after('id')
                  ->constrained('user_types')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
        });

        // Modifying column properties for users table
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 50)->change();
            $table->string('email', 255)->change();
            $table->string('password', 255)->change();
        });

        // Creating lists table
        Schema::create('lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->string('name', 100);
            $table->text('description');
            $table->timestamps();
        
            $table->index('user_id');
        });

        // Creating resources table
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('author', 150);
            $table->string('subject', 100);
// title, author, subject, published_year, format
            $table->enum('format', [
                'book',
                'ebook',
                'audiobook',
                'newspaper',
                'journal',
                'magazine',
                'podcast',
                'video',
                'website',
                'microform',
                'other'
            ]);
        
            $table->year('published_year');
            $table->timestamps();

            $table->index('format');
            $table->index('published_year');
            
        });

        // Creating tags table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        // Creating list_resource pivot table
        Schema::create('list_resource', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained('lists')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('resource_id')->constrained('resources')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('tags')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('position')->default(0); // For custom ordering
            $table->text('personal_note'); // User's personal note for this resource in this list
            $table->timestamps();

            // Composite indexes for common queries
            $table->index(['list_id', 'resource_id']);
            $table->index(['resource_id', 'tag_id']);
            $table->index('tag_id');

            // Prevent same resource with same tag in same list
            $table->unique(['list_id', 'resource_id', 'tag_id']);

        });

        // Creating reviews table
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_resource_id')
                  ->constrained('list_resource')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->text('content');
            $table->unsignedTinyInteger('rating')->check('rating >= 1 AND rating <= 5');
            $table->boolean('is_recommended')->default(true);
            $table->timestamps();
            
            $table->index('list_resource_id');
            $table->index('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('list_resource');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('resources');
        Schema::dropIfExists('lists');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_type_id']);
            $table->dropColumn('user_type_id');
        });
        
        Schema::dropIfExists('user_types');

    }
};
