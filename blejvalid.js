const formulari = document.getElementById('formulari');

const emri = document.getElementById('emri');
const mbiemri = document.getElementById('mbiemri');
const kartela = document.getElementById('kartela');


formulari.addEventListener("submit", (e)=>{

    let errorat = [];

    if(emri.value.trim() === ''){
        errorat.push('Emri duhet plotesuar');
        emri.setAttribute('placeholder', 'Emri duhet plotesuar!');
        emri.style.borderColor='red';
        emri.classList.add('error');

    }
    if(mbiemri.value.trim() === ''){
        errorat.push('Mbiemri duhet plotesuar');
        mbiemri.setAttribute('placeholder', 'Mbiemri duhet plotesuar!');
        mbiemri.style.borderColor='red';
        mbiemri.classList.add('error');

    }
    if(kartela.value.trim() === ''){
        errorat.push('Kartela duhet plotesuar');
        kartela.setAttribute('placeholder', 'Kartela duhet plotesuar!');
        kartela.style.borderColor='red';
        kartela.classList.add('error');

    }
    else if(kartela.value.length<6){
        errorat.push('Kartela Gabim');
        kartela.setAttribute('placeholder', 'Kartela duhet te kete min 6 nr/shkronja!');
        kartela.style.borderColor='red';
        kartela.classList.add('error');
    }
    
    
   

    if(errorat.length >0){
        e.preventDefault();
    }
});