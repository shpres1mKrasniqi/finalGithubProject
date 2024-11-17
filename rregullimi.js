const slidat = document.querySelectorAll(".slidat img");

let indeks=0;

let id = null;




document.addEventListener("DOMContentLoaded", initializeSliders)

function initializeSliders(){

    if(slidat.length >0){
        slidat[indeks].classList.add("shfaqSlidet");
        id = setInterval(tjetri, 5000);
    
    }

  
}

function shfaq(index){


    if(index>=slidat.length){
        indeks=0;
    }
    else if(index< 0){
        indeks=slidat.length-1;
    }
    slidat.forEach(slide => {
        slide.classList.remove("shfaqSlidet");
    });

    slidat[indeks].classList.add("shfaqSlidet");
}

function paraprak(){
    clearInterval(id);
    indeks--;
    shfaq(indeks);

    
}

function tjetri(){
    indeks++;
    shfaq(indeks);
}

