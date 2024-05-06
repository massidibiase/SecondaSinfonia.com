<x-layout.main>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="forgot-password" method="POST">
        @csrf      
        <div class="mb-3">
            <label  class="form-label">{{__('ui.Email address')}}</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}" >
            @error('email')
              <span>{{$message}}</span>
              @enderror
          </div>
        <button type="submit" class="btn btn-primary"> {{__('ui.Invia recupero password')}} </button>
    </form>
</x-layout.main>