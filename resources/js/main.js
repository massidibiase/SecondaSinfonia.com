




// document.addEventListener('scroll', function() {
//     var elementoFisso = document.getElementById('elementoFisso');
//     var posizioneIniziale = elementoFisso.offsetTop;

//     if (window.pageYOffset > posizioneIniziale) {
//         elementoFisso.style.position = 'fixed';
//         elementoFisso.style.top = '0';
//     } else {
//         elementoFisso.style.position = 'absolute';
//         elementoFisso.style.top = posizioneIniziale + 'px';
//     }
// });



// document.addEventListener('DOMContentLoaded', function() {
//     const menuToggle = document.querySelector('.menu-toggle');
//     const navbarMenu = document.querySelector('.navbar');

//     // Aggiungi un event listener per il click sull'icona del menu burger
//     menuToggle.addEventListener('click', function() {
//         // Toggle la classe 'show' per mostrare/nascondere il menu burger
//         navbarMenu.classList.toggle('show');
//     });
// });

// document.addEventListener('DOMContentLoaded', function() {
//   const menuToggle = document.getElementById('menu-toggle');
//   const mobileMenu = document.getElementById('mobile-menu');

//   menuToggle.addEventListener('click', function() {
//      mobileMenu.classList.toggle('show');
//   });
// });

  
//   // Aggiungi un event listener all'icona del menu burger per chiamare la funzione toggleMenu()
//   document.querySelector(".icon_menu").addEventListener("click", toggleMenu);

export function showSidebar(){
  console.log('showSidebar');
    document.querySelector('.sidebar').style.display = 'block';
  }

export function hideSidebar(){
    document.querySelector('.sidebar').style.display = 'none';
  }

  export function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  