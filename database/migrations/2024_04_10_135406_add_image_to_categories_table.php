<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image')->nullable();
        });

        $categories = [
            ['name' => 'CD', 'image' => 'cd.jpg'],
            ['name' => 'Vinili', 'image' => 'vinili.jpg'],
            ['name' => 'Chitarre', 'image' => 'chitarre.jpg'],
            ['name' => 'Bassi Elettrici', 'image' => 'bassiElettrici.jpg'],
            ['name' => 'Archi', 'image' => 'archi.jpg'],
            ['name' => 'Ottoni', 'image' => 'ottoni.jpg'],
            ['name' => 'Batterie', 'image' => 'batterie.jpg'],
            ['name' => 'Percussioni', 'image' => 'percussioni.jpg'],
            ['name' => 'Strumenti a Fiato', 'image' => 'strumentiFiato.jpg'],
            ['name' => 'Accessori', 'image' => 'accessori.jpg'],
            

        ];
        
        foreach ($categories as $categoryData) {
            $category = new Category();
            $category->name = $categoryData['name'];
            $category->image = $categoryData['image']; 
            $category->save();
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
