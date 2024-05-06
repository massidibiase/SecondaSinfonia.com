<x-layout.main>

  <h2 class="mt-4 mb-4">{{__('ui.Ecco il dettaglio annuncio')}}:</h2>
  <div class="single-product-container-row">
    @if ($insertion->images)

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner single-product-image">
        @foreach ($insertion->images as $image)
        <div class="carousel-item @if($loop->first)active @endif">
          <img src="{{!$insertion->images()->get()->isEmpty() ? $insertion->images()->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" class="single-product-image-img" alt="...">
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    @endif
    <div class="single-product-container-column">
      <h2 class="single-product-title">{{$insertion->title}}</h2>
      <h5 class="single-product-description">{{$insertion->description}}</h5>
      <h5 class="single-product-price"> {{__('ui.Prezzo')}}: {{$insertion->price}} €</h5>
      <p class="single-product-description">{{__('ui.Pubblicato il')}}: {{$insertion->created_at->format('d/m/Y')}}</p>
      <a href="{{ route('categories.showInsertions', $insertion->category->name) }}" class="single-product-card-button">{{__('ui.Categoria')}}: {{ __('categories.' . $insertion->category->name) }}</a>
    </div>

      </div>


    </x-layout.main>