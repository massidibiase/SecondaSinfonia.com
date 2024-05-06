<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Insertion;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $insertion_to_check= Insertion::where('is_accepted', null)->first();
        return view('revisor.index', compact('insertion_to_check'));
        
    
    }

    public function acceptAnnouncement (Insertion $insertion){
        $insertion->setAccepted(true);
        return redirect()->back()->with('messageAccepted', 'Annuncio accettato')->with('insertion_to_check','insertion');

    }

    public function rejectAnnouncement (Insertion $insertion){
        $insertion->setAccepted(false);
        return redirect()->back()->with('messageRejected', 'Annuncio rifiutato')->with('insertion_to_check','insertion');
        
    }

    public function undoChanges (Insertion $insertion){
        $insertion = Insertion::whereNotNull('is_accepted')->orderBy('updated_at', 'desc')->first(); 
        $insertion->setAccepted(Null);        
        //$insertion_to_check=$insertion;
        return redirect()->back()->with('messageUndo', 'Modifica annullata')->with('insertion_to_check','insertion');
        
    }

public function becomeRevisor(){
    Mail::to('info@secondasinfonia.com')->send(new BecomeRevisor(Auth::user()));
    return redirect()->back()->with('message', 'Grazie per la tua richiesta');
}


public function makeRevisor (User $user){
    Artisan::call('app:makeUserRevisor', ["email"=>$user->email]);
    return redirect('/')->with('messageOk', 'Utente promosso a revisore');
}



}






