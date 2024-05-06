<div class="create-background">
    <x-success-message />
    <h1 class="insertion-h1">{{__('ui.Aggiungi Annuncio')}}</h1>

    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label class="label-create">{{__('ui.Titolo')}}</label>
            <input type="text" wire:model.change="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <span>{{$message}}</span>
            @enderror
        </div>


        <div class="mb-3">
            <label class="label-create">{{__('ui.Descrizione')}}</label>
            <input type="text" wire:model.change="description" class="form-control @error('description') is-invalid @enderror">
            @error('description')
            <span>{{$message}}</span>
            @enderror
        </div>


        <div class="mb-3">
            <label class="label-create">{{__('ui.Prezzo')}}</label>
            <input type="number" wire:model.change="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <span>{{$message}}</span>
            @enderror
        </div>

        <select class="form-select @error('category') is-invalid @enderror" wire:model.live="category">
            <option value="">{{__('ui.Scegli Categoria Annuncio')}}</option>
            @foreach($categories as $category)
            <option wire:key="{{$category->id}}"  value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
        <span>{{$message}}</span>
        @enderror

        {{-- SEZIONE IMMAGINE --}}
        <div class="mb-3 mt-3">
            <input wire:model='temporary_images' type="file" name='images' multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder='Img' />

            @error('images.*')
            <p class="text-danger mt-2">{{$message}}</p>
            @enderror
            
            @error('images')
            <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>

        @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>{{__('ui.Anteprima Immagine')}}</p>
                <div class="d-flex flex-nowrap overflow-auto border border-4 border-info rounded shadow py-4 image-preview-container">
                    @foreach ($images as $key => $image)
                    <div class="col my-3 image-item">
                        <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click='removeImage({{$key}})'>{{__('ui.Cancella')}}</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        <button type="submit" id="scrollToTop" class="form-card-button">

            {{__('ui.Salva Annuncio')}}

        </button>
    </form>
</div>
