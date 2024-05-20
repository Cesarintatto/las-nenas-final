window.addEventListener("scroll",function(){
    var header = document.getElementById("header");
    header.classList.toggle ("new-head",window.scrollY>0);
});

window.onload = function() {
    var videoLanding = document.getElementById ('landingVideo');

    videoLanding.addEventListener ("click", function(){
        if (videoLanding.paused) {
            videoLanding.play ();
        }else{
            videoLanding.pause();
        }
    });
};

window.onload = function() {
    var loader = document.getElementById ('load');
    loader.style.opacity = '0';
    loader.style.transition = 'opacity 1s';
    
    setTimeout(function() {
        loader.style.display = 'none';
    }, 1000);
}

//intento de carga

var sendBtn = document.getElementById('btn-enviar');
sendBtn.addEventListener('click', function() {
    document.getElementById('load2').style.display = 'flex';
    document.getElementById('load2').style.opacity = '1';
});



const menuHeader  =  document.getElementById("menu");
const headerIcon  =  document.getElementById("menuicon");

function showMenu (){
    menuHeader.classList.toggle ("show");
    
};
