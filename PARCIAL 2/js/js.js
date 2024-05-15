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
            $porcent.textContent = `${load}%`;
            $cir.style.background = `conic-gradient(from 0deg at 50% 50%, #3d1888 0%, #d09bf8 ${load}%, #121012 ${load}%)`;
        }
    }, 50);
  });
  
  
  var sr = ScrollReveal({
      distance:"75px",
      duration:6000
  })
  
  sr.reveal(`.header`,{origin:"top"})
  sr.reveal(`.home`,{origin:"top"})
  sr.reveal(`.home__data`,{origin:"top"})
  sr.reveal(`.home__img`,{origin:"right"})
  
  var sr1 = ScrollReveal({
      distance:"90px",
      duration:2000
  })
  sr1.reveal(`.img`),{origin:"bottom"}
  sr1.reveal(`.footer`,{origin:"bottom"})
  