
const shtoLajmet = document.getElementById('shtoLajmet');
const titulli = document.getElementById('titulli');
const foto = document.getElementById('foto');
const pershkrimi = document.getElementById('pershkrimi');

shtoLajmet.addEventListener('submit', (e)=>{


    let eror  = [];

    if(titulli.value.trim()===''){
        eror.push('error');
        titulli.style.borderColor = 'red';
        titulli.classList.add('error');
        titulli.setAttribute('placeholder', 'Titulli duhet te plotesohet!');

    }
    if(foto.value.trim()===''){
        eror.push('error');
        foto.style.borderColor = 'red';
        foto.classList.add('error');
        foto.setAttribute('placeholder', 'foto duhet te plotesohet!');
    }
    if(pershkrimi.value.trim()===''){
        eror.push('error');
        pershkrimi.style.borderColor = 'red';
        pershkrimi.classList.add('error');
        pershkrimi.setAttribute('placeholder', 'Pershkrimi duhet te plotesohet!');
    }

    if(eror.length >0){
        e.preventDefault();
    }
});