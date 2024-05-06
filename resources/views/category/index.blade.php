<x-layout.main>
<div class="category-card-container">
@foreach ($categories as $category)

        <div class="category-card">
      <img class="category-card-img" src="{{asset('images/categories/'.$category->image)}}" alt="{{$category->name}}">
      <div>
        <h2 class="card-title">{{__("ui.$category->name")}}</h2>
        <p class="card-text">{{__('ui.Annunci Presenti')}}: {{$category->insertions_count}}</p>
        <a href="{{route('categories.showInsertions', $category->name)}}"><button class="category-card-button">{{__('ui.Vai agli annunci')}}</button></a>
      </div>
    </div>


@endforeach
</div>


</x-layout.main>