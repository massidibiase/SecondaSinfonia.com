<x-layout.main>
    
    @if(isset($searchTerm))
    <h1>Ecco i risultati per la tua ricerca "{{ $searchTerm }}"</h1>
    
        
    @else
    <h1>{{__('ui.allAnnouncements')}}</h1>
        
    
@endif


    <div class="product-card-container">

        @forelse ($insertions as $insertion)


        <div class="product-card">

             <img class=" product-card-img" src="{{!$insertion->images()->get()->isEmpty() ? $insertion->images()->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" alt="..."> 
            {{-- <img class=" product-card-img" src="{{Storage::url($insertion->images->first()->getUrl(300,300))}}" alt="..."> --}}
            <div>
                <h5>{{$insertion->title}}</h5>
                <p>{{$insertion->description}}</p>
                <p> {{__('ui.Prezzo')}}: {{$insertion->price}} €</p>
            </div>
            <div>

                <a href="{{route('insertion.show', $insertion->id)}}" class="product-card-button">{{__('ui.Visualizza')}}</a>


                <a href="{{ route('categories.showInsertions', $insertion->category->name) }}" class="product-card-button">{{__('ui.Categoria')}}: {{ __('categories.' . $insertion->category->name) }}</a>



                <p class="special-p">{{__('ui.Pubblicato il')}}: {{$insertion->created_at->format('d/m/Y')}}</p>

            </div>
        </div>


        @empty

        <div class="col-12">
            <div class="alert alert-warning py-3 shadow">
                <p class="lead"> {{__('ui.Non ci sono annunci per la ricerca effettuata')}}</p>
                <p class="lead"> {{__('ui.Pubblicane uno:')}} <a href="{{route('insertion.create')}}" class="category-card-button"> {{__('ui.Inserisci Annuncio')}}</a></p>
            </div>
        </div>
        @endforelse



    </div>
    <div>{{ $insertions->links() }}</div>



</x-layout.main>