let listaemenus = document.getElementById("listaemenus");
listaemenus.style.maxHeight = "0px";

function menu() {
    if (listaemenus.style.maxHeight === "0px") {
        listaemenus.style.maxHeight = "300px";
    } else {
        listaemenus.style.maxHeight = "0px";
    }
}


//Slideri 
const initSlider = () => {

    const imageList = document.querySelector(".slider .image");
    const slideButtons = document.querySelectorAll(".slider .slide-button");
   
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
    
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id==="prev-slide" ? -1 :1;
            const scrollAmount= imageList.clientWidth * direction;
            imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
        });
    });
     const handleSlideButtons = () =>{
        slideButtons[0].style.display= imageList.scrollLeft<= 0 ? "none" : "block";
        slideButtons[1].style.display= imageList.scrollLeft>= maxScrollLeft ? "none" : "block";
        
     }

    
    imageList.addEventListener("scroll", () => {
        handleSlideButtons();
    })
}

window.addEventListener("load", initSlider);


const formaSignup = document.getElementById('signupforma');
const emri = document.getElementById('emri');
const mbiemri = document.getElementById('mbiemri');
const emaili = document.getElementById('imejli');
const passwordi1 = document.getElementById('fjalekalimi');
const passwordi2 = document.getElementById('fjalekalimi2');


const formaLogin = document.getElementById('form');
const useriNormalEmail = document.getElementById('imejliUser');
const pasiUserit = document.getElementById('pasiiUser');




formaSignup.addEventListener('submit' , (e) =>{

    let errorat = [] ;

    if(emri.value.trim() === ''){
       errorat.push("Emri duhet te plotesohet!");
        emri.style.borderColor = 'red';
        emri.classList.add('error');
        emri.setAttribute('placeholder', 'Emri duhet plotesuar!');
    }

    if(mbiemri.value.trim() === ''){
        errorat.push("Mbiemri duhet te plotesohet!");
        mbiemri.style.borderColor = 'red';
        mbiemri.classList.add('error');
        mbiemri.setAttribute('placeholder', 'Mbiemri duhet plotesuar!');
      
    }
    if(emaili.value.trim() ==''){
        errorat.push("Emaili nuk eshte valid!");
        emaili.style.borderColor = 'red';
        emaili.classList.add('error');
        emaili.setAttribute('placeholder', 'Emaili duhet plotesuar!');
    }

    if(passwordi1.value.trim() === ''){
        errorat.push("Passwordi duhet te plotesohet!");
        passwordi1.style.borderColor = 'red';
        passwordi1.classList.add('error');
        passwordi1.setAttribute('placeholder', 'Passwordi duhet plotesuar!');

    }
    else if(passwordi1.value.length<6){
        errorat.push("Passwordi duhet te kete minimum 8 karaktere!");
        passwordi1.style.borderColor = 'red';
        passwordi1.classList.add('error');
        passwordi1.setAttribute('placeholder', 'Passwordi, min 6 karaktere!');
    }
   
    if(passwordi2.value.trim() === ''){
        errorat.push("Passwordi duhet te plotesohet!");
        passwordi2.style.borderColor = 'red';
        passwordi2.classList.add('error');
        passwordi2.setAttribute('placeholder', 'Passwordi duhet plotesuar!');

    }
    else if(passwordi2.value!==passwordi1.value){
        errorat.push("Passwordi duhet te plotesohet!");
        passwordi2.style.borderColor = 'red';
        passwordi2.classList.add('error');
        passwordi2.setAttribute('placeholder', 'Passwordat nuk perputhen!');
    }
   



    if(errorat.length>0){
        e.preventDefault();
    }


});


