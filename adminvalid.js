let listaemenus = document.getElementById("listaemenus");
listaemenus.style.maxHeight = "0px";

function menu() {
    if (listaemenus.style.maxHeight === "0px") {
        listaemenus.style.maxHeight = "300px";
    } else {
        listaemenus.style.maxHeight = "0px";
    }
}

const form = document.getElementById('adminform');
const imejli = document.getElementById('imejliAdminit');
const fjalekalimi = document.getElementById('pasiiAdminit');

form.addEventListener('submit', function (e) {
    let mesazheGabimi = [];



    if (imejli.value.trim() === '') {
        mesazheGabimi.push('Emaili eshte eshte dhene gabim!');
        imejli.style.borderColor = 'red';
        imejli.classList.add('error');
        imejli.setAttribute('placeholder', 'Emaili duhet plotesuar!');

    }


    if (fjalekalimi.value.trim() === '') {
        mesazheGabimi.push('Password eshte dhene gabim!');
        fjalekalimi.style.borderColor = 'red';
        fjalekalimi.classList.add('error');
        fjalekalimi.setAttribute('placeholder', 'Passwordi duhet plotesuar!');

    }
    else if(fjalekalimi.value.length<8){
        mesazheGabimi.push('Password eshte dhene gabim!');
        fjalekalimi.style.borderColor = 'red';
        fjalekalimi.classList.add('error');
        fjalekalimi.setAttribute('placeholder', 'Password, min 8 karaktere!');
    }


    if (mesazheGabimi.length > 0) {
        e.preventDefault(); 
       
    }


});



