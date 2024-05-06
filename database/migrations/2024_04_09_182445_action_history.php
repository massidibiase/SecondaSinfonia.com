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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('insertion_id');
            $table->foreign('insertion_id')->references('id')->on('insertions')->onDelete('cascade');
            $table->timestamps();
            $table->boolean('pending')->references('is_accepted')->on('insertions')->onDelete('cascade');
        });
    }

    public function undoLastAction(Request $request)
    {
        // Trova l'ultima azione dell'utente
        $lastAction = Action::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
    
        if ($lastAction) {
            // Annulla l'azione
            if ($lastAction->pending == 'true') {
            // Annulla l'accettazione dell'annuncio
                $insertion = Insertion::find($lastAction->insertion_id);
                $insertion->status = 'NA';
                $insertion->save();
            } elseif ($lastAction->pending == 'false') {
            // Annulla il rifiuto dell'annuncio
                $insertion = Insertion::find($lastAction->insertion_id);
                $insertion->status = 'NA';
                $insertion->save();
            }
    
            // Elimina l'azione dalla storia delle azioni
            $lastAction->delete();
    
            return redirect()->back()->with('success', 'L\'ultima azione è stata annullata con successo.');
        } else {
            return redirect()->back()->with('error', 'Non ci sono azioni da annullare.');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
