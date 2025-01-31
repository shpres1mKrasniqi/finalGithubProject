const kontaktimi = document.getElementById('kontaktimi');
const namei = document.getElementById('name');
const email  = document.getElementById('email');
const message = document.getElementById('message');

kontaktimi.addEventListener('submit', (e)=>{

    let gabimet = [];   

    if(namei.value.trim()===''){
        gabimet.push('Gabim');
        namei.style.borderColor = 'red';
        namei.classList.add('error');
        namei.setAttribute('placeholder', 'Emri dhe Mbiemri duhet plotesuar!');
    }

    if(email.value.trim()===''){
        gabimet.push('Gabim');
        email.style.borderColor = 'red';
        email.classList.add('error');
        email.setAttribute('placeholder', 'Email duhet plotesuar!');
    }

    if(message.value.trim()===''){
        gabimet.push('Gabim');
        message.style.borderColor = 'red';
        message.classList.add('error');
        message.setAttribute('placeholder', 'Mesazhi duhet plotesuar!');
    }

    
    if(gabimet.length>0){
        e.preventDefault();
    }
});