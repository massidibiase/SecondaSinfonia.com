<x-layout.main-form>

<div class="form-background">
<form method="POST" action="/login">
        @csrf

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

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="check-input-label" name="remember">{{__('ui.Ricordami')}}</label>
          </div>

        <a class="reset-password" href="/forgot-password">{{__('ui.Recupera Password')}}</a>

          <br>

        <button type="submit" class="form-card-button">{{__('ui.Accedi')}}</button>
    </form>
</div>
    


</x-layout.main-form>