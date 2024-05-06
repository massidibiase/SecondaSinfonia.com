<div>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{-- {{session('success')}} --}}
      {{ __('messages.session_success')}}
      </div>
    @endif
</div>
<!-- Annuncio pubblicato -->

<div>
    @if (session()->has('messageAccepted'))
    <div class="alert alert-success" role="alert">
      {{ __('messages.session_messageAccepted')}}
      {{-- {{session('messageAccepted')}} --}}
      </div>
    @endif
</div>
<!-- Revisore: annuncio accettato -->

<div>
    @if (session()->has('messageRejected'))
    <div class="alert alert-danger" role="alert">
      {{ __('messages.session_messageRejected')}}
      {{-- {{session('messageRejected')}} --}}
      </div>
    @endif
</div>
<!-- Revisore: annuncio rifiutato -->

<div>
    @if (session()->has('messageUndo'))
    <div class="alert alert-success" role="alert">
      {{ __('messages.session_messageUndo')}}
      {{-- {{session('messageUndo')}} --}}
      </div>
    @endif
</div>
<!-- Revisore: ultima modifica annullata -->
<div>
@if (session()->has('message'))
  <div class="alert alert-success" role="alert">
     {{ ('Grazie per la tua richiesta')}} 
    </div>
  @endif
</div>

<div>
  @if (session()->has('messageOk'))
    <div class="alert alert-success" role="alert">
       {{ ('Utente promosso a revisore')}} 
      </div>
    @endif
  </div>