<x-layout.main>
    <form action="/reset-password" method="POST">
        @csrf      
        <div class="mb-3">
            <label  class="form-label">{{__('ui.Email address')}}</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}" >
            @error('email')
              <span>{{$message}}</span>
              @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <span>{{$message}}</span>
          @enderror
          </div>
  
          <div class="mb-3">
              <label  class="form-label">{{__('ui.Conferma password')}}</label>
              <input type="password" class="form-control" name="password_confirmation" >
            </div>

        <input type="hidden" name="token" value="{{request()->route('token')}}">
        <button type="submit" class="btn btn-primary"> {{__('ui.Invia recupero password')}}</button> 
    </form>
</x-layout.main>