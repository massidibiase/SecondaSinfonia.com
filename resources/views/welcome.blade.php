<x-layout.main>
  <x-success-message/>

  @if(session('access.denied'))
    <div class="alert alert-danger" role="alert">
      {{ session('access.denied') }}
    </div>
  @endif

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div>
    <div class="d-none d-lg-block d-md-none mb-5 ">
      <img class="img-home" src="{{asset('media/drum-home.jpg')}}" alt="">
      <div class="txt-position-home">
        <h2 class="txt-home">{{__('ui.Regala una')}} <img class="only-txt-home" src="{{asset('media/seconda-sinfonia_solo-testo.svg')}}" alt=""> {{__('ui.ai tuoi strumenti musicali')}}</h2>
      </div>
    </div>

    <hr class="mb-5">
    <h1 class="txt-home text-center mb-5">{{__('ui.Ecco i nostri ultimi annunci')}}</h1>
    <hr class="mb-5">

    <div class="product-card-container mb-4">

      @foreach ($insertions as $insertion)
        <div class="product-card">
          <img class="product-card-img" src="{{!$insertion->images()->get()->isEmpty() ? $insertion->images()->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" alt="...">
          <div>
            <h5>{{$insertion->title}}</h5>
            <p>{{$insertion->description}}</p>
            <p>{{__('ui.Prezzo')}}: {{$insertion->price}} €</p>
            <a href="{{route('insertion.show', $insertion->id)}}" class="product-card-button">{{__('ui.Visualizza')}}</a>
            <a href="{{ route('categories.showInsertions', $insertion->category->name) }}" class="product-card-button">{{__('ui.Categoria')}}: {{ __('categories.' . $insertion->category->name) }}</a>
            <p class="special-p">{{__('ui.Pubblicato il')}}: {{$insertion->created_at->format('d/m/Y')}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row"></div>
  </div>
</x-layout.main>
