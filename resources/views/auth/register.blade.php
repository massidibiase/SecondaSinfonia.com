<x-layout.main-form>

<div class="form-background">
<form method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label  class="label-form">{{__('ui.Nome Utente')}}</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" >
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
          <label  class="label-form">{{__('ui.Email address')}}</label>
          <input type="email" class="form-control" name="email" value="{{old('email')}}" >
          @error('email')
            <span>{{$message}}</span>
        @enderror
        </div>

        <div class="mb-3">
          <label  class="label-form">Password</label>
          <input type="password" class="form-control" name="password">
          @error('password')
          <span>{{$message}}</span>
        @enderror
        </div>

        <div class="mb-3">
            <label  class="label-form">{{__('ui.Conferma password')}}</label>
            <input type="password" class="form-control" name="password_confirmation" >
          </div>

        <button type="submit" class="form-card-button">{{__('ui.Accedi')}}</button>
    </form>

</div>
    


</x-layout.main-form>