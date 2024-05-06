<x-success-message />
<div class="personal-footer footer-personal">
<footer class="text-center text-lg-start bg-body-tertiary text-muted background-details ftxt mt-auto">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom-black background-accent">
    <div class="me-5 d-none d-lg-block">
    <span>{{__('ui.Seguici sui nostri social')}}:</span>
    </div>
  
    <div>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-google"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="me-4 text-reset">
      <i class="fab fa-linkedin"></i>
    </a>
    </div>
  </section>
  
  <section class="background-details">
    <div class="container text-center text-md-start">
    <div class="row">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 mt-4">
      <h6 class="text-uppercase fw-bold mb-4">
        Seconda Sinfonia
      </h6>
      <p>
        <a href="#!" class="text-reset">{{__('ui.Chi siamo')}}</a>
      </p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
      <h6 class="text-uppercase fw-bold mb-4">
        {{__('ui.Link utili')}}
      </h6>
      <p>
        <a href="{{route('become.revisor')}}" class="text-reset">{{__('ui.Lavora con noi')}}</a>
      </p>
      <p>
        <a href="#!" class="text-reset">Cookies</a>
      </p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
      <h6 class="text-uppercase fw-bold mb-4">{{__('ui.Contatti')}}</h6>
      <p><i class="fas fa-home me-3"></i> Via Fasulla 123, 20100 Milano, ITA </p>
      <p>
        <i class="fas fa-envelope me-3"></i>
        info@secondasinfonia.com
      </p>
      <p><i class="fas fa-phone me-3"></i>  02 123 456 78</p>
      <p><i class="fas fa-print me-3"></i>  02 876 543 21</p>
      </div>
    </div>
    </div>
  </section>
  
  <div class="text-center p-4 background-details">
    <img class="logo" src="{{asset('media/secondaSinfoniaLogo.png')}}" alt="Logo Seconda Sinfonia">
    <p>© 2024 Seconda Sinfonia - P.IVA: 07647440721</p>
  </div>
  </footer>
</div>
