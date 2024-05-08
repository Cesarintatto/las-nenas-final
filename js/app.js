window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
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
const menuHeader  =  document.getElementById("menu");
const headerIcon  =  document.getElementById("menuicon");

function showMenu (){
    menuHeader.classList.toggle ("show");
    // if(menuHeader.className === ""){
    //     menuHeader.className = "nav-header-menu";
    // }else {
    //     menuHeader.className = "show";
    // }
};


console.log (headerIcon);
console.log (menuHeader);