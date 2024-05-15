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
                // Muestra el contenido principal
                contenido.style.display = 'block';
            }, 1000);
        } else {
            load++;
            $porcent.textContent = `${load}%`;
            $cir.style.background = `conic-gradient(from 0deg at 50% 50%, #3d1888 0%, #d09bf8 ${load}%, #121012 ${load}%)`;
        }
    }, 50);
  });
  