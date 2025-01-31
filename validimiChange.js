
const formaNdryshimitTeUserit = document.getElementById('formaNdryshimitTeUserit');

const emri = document.getElementById('emri');
const mbiemri = document.getElementById('mbiemri');
const emaili = document.getElementById('emaili');
const paswordi = document.getElementById('paswordi');

formaNdryshimitTeUserit.addEventListener('submit', (ee)=>{

    let eroraat  = [];

    if(emri.value.trim()===''){
        eroraat.push('Gabim');
        emri.style.borderColor = 'red';
        emri.classList.add('error');
        emri.setAttribute('placeholder', 'Emri duhet te plotesohet!');
    }
    if(mbiemri.value.trim()===''){
        eroraat.push('Gabim ');
        mbiemri.style.borderColor = 'red';
        mbiemri.classList.add('error');
        mbiemri.setAttribute('placeholder', 'Mbiemri duhet te plotesohet!');
    }
    if(emaili.value.trim()===''){
        eroraat.push('Gabim');
        emaili.style.borderColor = 'red';
        emaili.classList.add('error');
        emaili.setAttribute('placeholder', 'Emaili duhet te plotesohet!');
    }
    if(paswordi.value.trim()==='' || paswordi.length() < 6){
        eroraat.push('Gabim ');
        paswordi.style.borderColor = 'red';
        paswordi.classList.add('error');
        paswordi.setAttribute('placeholder', 'Password duhet te plotesohet, min 6 char!');
    }


    if(eroraat.length>0){
        ee.preventDefault();
    }
});

