
<nav class="nav-custom">
<ul class="sidebar">
  <li id="hideButton"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
    <li><a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a></li>
    <li><a href="{{route('insertions.index')}}">{{__('ui.Annunci')}}</a></li>
    <li>
      <div class="dropdown">
        <button class="dropbtn">{{__('ui.Categorie')}} <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg></i>
        </button>
        <div class="dropdown-content">
          <a href="{{route('categories.index')}}">{{__('ui.Tutte le categorie')}}</a>
          @foreach($categories as $category)
          <a href="{{route('categories.showInsertions', $category->name)}}">{{__("ui.$category->name")}}</a>
          @endforeach
        </div>
      </div>
    </li>
    <li><div class="dropdown">
    <a href="" class="dropbtn"><svg id="b" data-name="Livello 2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 405.887 405.888">
    <path d="m389.929,123.941c-10.224-24.169-24.854-45.87-43.483-64.5-18.629-18.63-40.33-33.259-64.499-43.481C256.911,5.369,230.331,0,202.943,0s-53.968,5.369-79.002,15.959c-24.17,10.224-45.871,24.853-64.5,43.482-18.63,18.63-33.26,40.331-43.483,64.5C5.369,148.978,0,175.558,0,202.944s5.369,53.966,15.958,79.003c10.224,24.17,24.854,45.871,43.483,64.499,18.628,18.63,40.329,33.26,64.5,43.483,25.035,10.589,51.615,15.958,79.002,15.958s53.967-5.369,79.002-15.958c24.171-10.224,45.872-24.854,64.5-43.483,18.63-18.628,33.26-40.329,43.483-64.5,10.589-25.036,15.958-51.616,15.958-79.002s-5.369-53.967-15.958-79.003Zm-34.096-1.756h-60.38c-7.641-31.312-18.942-54.783-29.108-71.145-2.689-4.329-5.382-8.3-8.031-11.951,42.095,14.263,76.958,44.33,97.518,83.096Zm-71.36,78.956c0,23.381-2.22,44.204-5.775,62.561H127.189c-3.555-18.357-5.775-39.18-5.775-62.561,0-22.041,1.98-41.639,5.182-58.956h152.694c3.202,17.317,5.182,36.915,5.182,58.956ZM225.604,31.485c6.544,6.436,15.505,16.631,24.405,31.166,8.548,13.959,17.981,33.606,24.817,59.534h-143.765c6.836-25.928,16.269-45.575,24.817-59.534,8.9-14.535,17.861-24.73,24.405-31.166,7.418-.975,14.98-1.485,22.661-1.485s15.243.51,22.661,1.485Zm-78.032,7.604c-2.648,3.651-5.341,7.622-8.031,11.951-14.207,22.865-23.341,47.391-29.102,71.145h-60.385c20.56-38.766,55.423-68.832,97.518-83.096Zm-106.544,103.096h65.281c-3.711,21.592-4.894,41.91-4.894,58.956,0,23.134,2.066,43.961,5.434,62.561H41.027c-7.12-18.913-11.027-39.386-11.027-60.758s3.907-41.846,11.028-60.759Zm9.026,141.517h61.098c7.598,30.327,18.473,53.57,28.285,70.092,2.818,4.746,5.64,9.1,8.407,13.093-42.217-14.226-77.187-44.336-97.79-83.184Zm129.176,90.552c-6.438-6.99-14.837-17.436-23.185-31.669-8.297-14.148-17.427-33.674-24.23-58.884h142.258c-6.803,25.209-15.934,44.736-24.23,58.884-8.348,14.235-16.749,24.681-23.184,31.668-7.756,1.068-15.67,1.633-23.715,1.633s-15.958-.565-23.714-1.633Zm78.813-7.368c2.768-3.993,5.589-8.347,8.407-13.093,13.571-22.852,22.504-46.892,28.283-70.092h61.1c-20.603,38.849-55.573,68.958-97.79,83.184Zm106.817-103.184h-65.845c4.161-23.088,5.458-44.673,5.458-62.561,0-21.795-1.841-41.402-4.871-58.956h65.258c7.12,18.913,11.028,39.387,11.028,60.759s-3.907,41.845-11.027,60.758Z" fill="#1d1d1b"/></svg><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></a>
      <div class="dropdown-content">
        <a class="dropbtn"><x-_locale lang='it' nation='it' /></a>
        <a class="dropbtn"><x-_locale lang='en' nation='gb' /></a>
        <a class="dropbtn"><x-_locale lang='es' nation='es' /></a>
      </div>
    </div></li>
    <li><div class="dropdown">
        <a class="dropbtn">{{ Auth::user()->name ?? __("ui.Utente") }}<svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
        
          @auth
          @if (Auth::user()->is_revisor)
          <span class=" position-absolute top-10 start-90 translate-middle badge rounded-pill bg-danger">
            {{App\Models\Insertion::toBeRevisionedCount()}}
            <span class="visually-hidden">{{__('ui.Messaggi da leggere')}}</span>
            @endif
            @endauth
          </a>
            <div class="dropdown-content">
              @auth
              <div>
              @if (Auth::user()->is_revisor)
              <a href="{{route('revisor.index')}}">{{__('ui.Zona Revisore')}}
                <span class=" position-absolute top-20 start-99 translate-middle badge rounded-pill bg-danger">
                  {{App\Models\Insertion::toBeRevisionedCount()}}
                  <span class="visually-hidden">{{__('ui.Messaggi da leggere')}}</span>
                </span>
              </a>
              @endif
              <a href="{{route('insertion.create')}}">{{__('ui.Inserisci Annuncio')}}</a>
              <a onclick="event.preventDefault();getElementById('form-logout').submit();">{{__('ui.Esci')}}</a>
            </div>
            @endauth
            </div>
            <div class="dropdown-content">
            @guest
            <a href="{{route('register')}}">{{__('ui.Registrati')}}</a>
            <a class="navbar-links" href="{{route('login')}}">{{__('ui.Accedi')}}</a>
            @endguest
      </div>
    </div></li>
    <li class="search-bar-sidebar">
      <form action="{{route('announcements.search')}}" method="GET" >
      <input class="search-input" name="searched" type="search" class="form-control me-2" placeholder="Ricerca Inserzione" aria-label="Ricerca">
      <button class="search-button" type="submit">{{__('ui.Cerca')}}</button>
      </form>
    </li>
  </ul>
  <ul>
    <li><a href="{{route('home')}}"><img class="logo" src="{{asset('media/secondaSinfoniaLogo.png')}}" alt="Logo Seconda Sinfonia"></a></li>
    <li class="hideOnMobile"><a href="{{route('insertions.index')}}">{{__('ui.Annunci')}}</a></li>
    <li class="search-bar-navbar">
      <form action="{{route('announcements.search')}}" method="GET">
      <button class="search-button" type="submit">{{__('ui.Cerca')}}</button>
      <input class="search-input" name="searched" type="search" class="form-control me-2" placeholder="{{__('ui.Ricerca')}}" aria-label="Ricerca">
      </form>
    </li>
    
    <li class="hideOnMobile"><a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a></li>
    <li class="hideOnMobile">
      <div class="dropdown">
        <a class="dropbtn">{{__('ui.Categorie')}} <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
        </a>
        <div class="dropdown-content">
        <a href="{{route('categories.index')}}">{{__('ui.Tutte le categorie')}}</a>
        @foreach($categories as $category)
          <a href="{{route('categories.showInsertions', $category->name)}}">{{__("ui.$category->name")}}</a>
          @endforeach
        </div>
      </div>
    </li>
    
    <li class="hideOnMobile">
    <div class="dropdown">
      
    <a class="dropbtn"><svg id="b" data-name="Livello 2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 405.887 405.888">
    <path d="m389.929,123.941c-10.224-24.169-24.854-45.87-43.483-64.5-18.629-18.63-40.33-33.259-64.499-43.481C256.911,5.369,230.331,0,202.943,0s-53.968,5.369-79.002,15.959c-24.17,10.224-45.871,24.853-64.5,43.482-18.63,18.63-33.26,40.331-43.483,64.5C5.369,148.978,0,175.558,0,202.944s5.369,53.966,15.958,79.003c10.224,24.17,24.854,45.871,43.483,64.499,18.628,18.63,40.329,33.26,64.5,43.483,25.035,10.589,51.615,15.958,79.002,15.958s53.967-5.369,79.002-15.958c24.171-10.224,45.872-24.854,64.5-43.483,18.63-18.628,33.26-40.329,43.483-64.5,10.589-25.036,15.958-51.616,15.958-79.002s-5.369-53.967-15.958-79.003Zm-34.096-1.756h-60.38c-7.641-31.312-18.942-54.783-29.108-71.145-2.689-4.329-5.382-8.3-8.031-11.951,42.095,14.263,76.958,44.33,97.518,83.096Zm-71.36,78.956c0,23.381-2.22,44.204-5.775,62.561H127.189c-3.555-18.357-5.775-39.18-5.775-62.561,0-22.041,1.98-41.639,5.182-58.956h152.694c3.202,17.317,5.182,36.915,5.182,58.956ZM225.604,31.485c6.544,6.436,15.505,16.631,24.405,31.166,8.548,13.959,17.981,33.606,24.817,59.534h-143.765c6.836-25.928,16.269-45.575,24.817-59.534,8.9-14.535,17.861-24.73,24.405-31.166,7.418-.975,14.98-1.485,22.661-1.485s15.243.51,22.661,1.485Zm-78.032,7.604c-2.648,3.651-5.341,7.622-8.031,11.951-14.207,22.865-23.341,47.391-29.102,71.145h-60.385c20.56-38.766,55.423-68.832,97.518-83.096Zm-106.544,103.096h65.281c-3.711,21.592-4.894,41.91-4.894,58.956,0,23.134,2.066,43.961,5.434,62.561H41.027c-7.12-18.913-11.027-39.386-11.027-60.758s3.907-41.846,11.028-60.759Zm9.026,141.517h61.098c7.598,30.327,18.473,53.57,28.285,70.092,2.818,4.746,5.64,9.1,8.407,13.093-42.217-14.226-77.187-44.336-97.79-83.184Zm129.176,90.552c-6.438-6.99-14.837-17.436-23.185-31.669-8.297-14.148-17.427-33.674-24.23-58.884h142.258c-6.803,25.209-15.934,44.736-24.23,58.884-8.348,14.235-16.749,24.681-23.184,31.668-7.756,1.068-15.67,1.633-23.715,1.633s-15.958-.565-23.714-1.633Zm78.813-7.368c2.768-3.993,5.589-8.347,8.407-13.093,13.571-22.852,22.504-46.892,28.283-70.092h61.1c-20.603,38.849-55.573,68.958-97.79,83.184Zm106.817-103.184h-65.845c4.161-23.088,5.458-44.673,5.458-62.561,0-21.795-1.841-41.402-4.871-58.956h65.258c7.12,18.913,11.028,39.387,11.028,60.759s-3.907,41.845-11.027,60.758Z" fill="#1d1d1b"/></svg><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></a>
      <div class="dropdown-content">
        
        <a class="dropbtn"><x-_locale lang='it' nation='it'/></a>
        <a class="dropbtn"><x-_locale lang='en' nation='gb'/></a>
        <a class="dropbtn"><x-_locale lang='es' nation='es'/></a>
      </div>
    </div>
  </li>
  <li class="hideOnMobile">
      <div class="dropdown">
        <a class="dropbtn">{{ Auth::user()->name ?? __("ui.Utente") }}<svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
        
          @auth
          @if (Auth::user()->is_revisor)
          <span class=" position-absolute top-10 start-90 translate-middle badge rounded-pill bg-danger">
            {{App\Models\Insertion::toBeRevisionedCount()}}
            <span class="visually-hidden">{{__('ui.Messaggi da leggere')}}</span>
            @endif
            @endauth
          </a>
            <div class="dropdown-content">
              @auth
              <div>
              @if (Auth::user()->is_revisor)
              <a href="{{route('revisor.index')}}">{{__('ui.Zona Revisore')}}
                <span class=" position-absolute top-20 start-99 translate-middle badge rounded-pill bg-danger">
                  {{App\Models\Insertion::toBeRevisionedCount()}}
                  <span class="visually-hidden">{{__('ui.Messaggi da leggere')}}</span>
                </span>
              </a>
              @endif
              <a href="{{route('insertion.create')}}">{{__('ui.Inserisci Annuncio')}}</a>
              <a onclick="event.preventDefault();getElementById('form-logout').submit();">{{__('ui.Esci')}}</a>
            </div>
            <form action="/logout" method="POST" id="form-logout">
              @csrf
            </form>
  
            @endauth
            </div>
            <div class="dropdown-content">
            @guest
            <a href="{{route('register')}}">{{__('ui.Registrati')}}</a>
            <a href="{{route('login')}}">{{__('ui.Accedi')}}</a>
            @endguest
      </div>
    </div>
    </li>
    <li id="showButton" class="menu-button"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
  </ul>
</nav>