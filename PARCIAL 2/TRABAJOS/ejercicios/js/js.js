document.addEventListener("DOMContentLoaded", function() {
    const $porcent = document.querySelector('.porcent');
    const $cir = document.querySelector('.cir');
    const contenido = document.querySelector('.contenido');
    let load = 0;
  
    const interval = setInterval(() => {
        if(load >= 100) {
            clearInterval(interval);
            setTimeout(() => {
                document.querySelector('.carga').style.display = 'none';
                contenido.style.display = 'block';
            }, 1000);
        } else {
            load++;
            $porcent.textContent = `${load}`;
            $cir.style.background = `conic-gradient(from 0deg at 50% 50%, #3d1888 0%, #d09bf8 ${load}%, #121012 ${load}%)`;
        }
    }, 50);
  });
  




  var swiper = new Swiper(".slide-content", {
    slidesPerView: 3, 
    spaceBetween: 30, 
    slidesPerGroup: 1,
    loop: true, 
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breackponits:{
      0:{
        slidesPerView: 1,
      },
      520:{
        slidesPerView: 2,
      },
      950:{
        slidesPerView: 3,
      }
    },
  });

  var sr = ScrollReveal({
    distance:"75px",
    duration:6000
})

sr.reveal(`.contenido`,{origin:"top"})
  