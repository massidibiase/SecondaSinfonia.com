<x-layout.main>


    <h1>{{__("ui.$category->name")}}</h1>

        <div class="product-card-container">
            @forelse($insertions as $insertion)


            <div class="product-card">
                <img src="{{!$insertion->images()->get()->isEmpty() ? $insertion->images()->first()->getUrl(300,300) : 'https://picsum.photos/300'}}" class="product-card-img" alt="...">
                <div>
                    <h5>{{$insertion->title}}</h5>
                    <p>{{$insertion->description}}</p>
                    <p>{{__('ui.Prezzo')}}: {{$insertion->price}}</p>
                </div>
                <div>
                    <a href="{{route('insertions.show', $insertion->id)}}" class="product-card-button">{{__('ui.Visualizza')}}</a>
                    <a href="{{ route('categories.showInsertions', $insertion->category->name) }}" class="product-card-button">{{__('ui.Categoria')}}: {{ __('categories.' . $insertion->category->name) }}</a>
                    <p class="special-p">{{__('ui.Pubblicato il')}}: {{$insertion->created_at->format('d/m/Y')}}</p>
                </div>
            </div>

            @empty
            <div class="col-12">
                <h2 class="mb-5"> {{__('ui.Non sono presenti annunci per questa categoria!')}} </h2>
                <p> {{__('ui.Pubblicane uno:')}} <a href="{{route('insertion.create')}}" class="btn-new"> {{__('ui.Inserisci Annuncio')}}</a> </p>
            </div>

            @endforelse

        </div>


</x-layout.main>