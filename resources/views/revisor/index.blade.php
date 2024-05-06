<x-layout.main>
    {{-- <x-success-message /> --}}

    <div class="container">
        <div class="row">
            @if ($insertion_to_check)
            <div class="col-12 col-lg-4">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner content-img">
                        @foreach ($insertion_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" class="revisor-img-product" alt="...">
                            <!-- <img src="{{!$insertion_to_check->images()->get()->isEmpty() ? $insertion_to_check->images()->first()->getUrl() : 'https://picsum.photos/200'}}"class="revisor-img-product" alt="..."> -->
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
                
                <div class="col-12 col-lg-12">
                    @if ($insertion_to_check)
                    <h2 class="item-txt">{{$insertion_to_check->title}}</h2>
                    <h4 class="item-txt">{{$insertion_to_check->description}}</h4>
                    <h4 class="item-txt">€ {{$insertion_to_check->price}}</h4>
                    <h5 class="item-txt">{{__('ui.Pubblicato il')}}: {{$insertion_to_check->created_at->format('d/m/Y')}}</h5>
                    @endif
                </div>
                
            </div>
            <div class="col-12 col-lg-4 mt-5">
                <h5 class="revisor-txt"> {{__('ui.Revisioni immagini')}}</h5>
                <p class="revisor-txt-min">{{__('ui.Adulti')}}: <span class="{{$image->adult}}"></span></p>
                <p class="revisor-txt-min">{{__('ui.Satira')}}: <span class="{{$image->spoof}}"></span></p>
                <p class="revisor-txt-min">{{__('ui.Medicina')}}: <span class="{{$image->medical}}"></span></p>
                <p class="revisor-txt-min">{{__('ui.Violenza')}}: <span class="{{$image->violence}}"></span></p>
                <p class="revisor-txt-min">{{__('ui.Contenuto ammiccante')}}: <span class="{{$image->racy}}"></span></p>
            </div>
            <div class="col-12 col-lg-4 mt-5">
                <h5 class="revisor-txt">Tags</h5>
                @if($image->labels)
                @forEach ($image->labels as $label)
                <p class="revisor-txt-min">{{$label}}</p>
                @endforeach
                @endif
            </div>
            @else
            <div class="notice-no-ins" role="alert">
                
                <h4 class="text-center">{{__('ui.Non ci sono più avvisi da approvare!')}}</h4>

                <p class="text-center">{{__('ui.Grazie')}} {{Auth::user()->name}} {{__('ui.Non ci sono più avvisi da approvare!')}}</p>
            </div>
            @endif
            <hr>
            <div class="row justify-content-center personal-justify">
                @if ($insertion_to_check)
                <div class="col-sm-12 col-md-4 my-1">
                    <form method="POST" action="{{ route('revisor.accept_announcement',['insertion'=>$insertion_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-accept">{{ __('ui.Accetta') }}</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 my-1">
                    <form method="POST" action="{{ route('revisor.reject_announcement',['insertion'=>$insertion_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-reject">{{ __('ui.Rifiuta') }}</button>
                    </form>
                </div>
                @endif
                @if ($insertion_to_check)
                <div class="col-sm-12 col-md-4 my-1">
                    <form method="POST" action="{{ route('revisor.undoChanges',['insertion'=>$insertion_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-cancel">{{ __('ui.Annulla modifiche') }}</button>
                    </form>
                </div>
                @elseif (is_null($insertion_to_check))
                <div class="col-sm-12 col-md-4 my-1">
                    <form method="POST" action="{{ route('revisor.undoChanges',['insertion'=>!$insertion_to_check]) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-cancel">{{ __('ui.Annulla modifiche') }}</button>
                    </form>
                </div>
                @endif
            </div>
        </div>

    </div>

</x-layout.main>