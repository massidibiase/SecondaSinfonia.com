<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//class CreateCategoriesTable extends Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->timestamps();
        });

        // $CD=__('ui.CD');
        // $Vinili=__('ui.Vinili');
        // $Chitarre=__('ui.CD');
        // $BassiElettrici=__('ui.Bassi Elettrici');
        // $Archi=__('ui.Archi');
        // $Ottoni=__('ui.Ottoni');
        // $Batterie=__('ui.Batterie');
        // $Percussioni=__('ui.Percussioni');
        // $StrumentiAFiato=__('ui.Strumenti a Fiato');
        // $Accessori=__('ui.Accessori');



            // $categories=['$CD', '$Vinili', '$Chitarre', '$BassiElettrici', '$Archi', '$Ottoni', '$Batterie', '$Percussioni', '$StrumentiAFiato', '$Accessori'];
          

            // foreach ($categories as $category)
            // {
            //     Category::create(['name'=>$category]);
            // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
