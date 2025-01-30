//front validimi per shtimin e produkteve

const shtoProduktetForma = document.getElementById('formulari');

const modeli  = document.getElementById('modeli');
const pershkrimi = document.getElementById('pershkrimi');
const cmimi = document.getElementById('cmimi');
const foto = document.getElementById('foto');


shtoProduktetForma.addEventListener('submit', function (e){

    let mesazheGabimi = [];

    if(modeli.value.trim() === ''){
        mesazheGabimi.push('Modeli Duhet te plotesohet!');
        modeli.style.borderColor= 'red';
        modeli.classList.add('error');
        modeli.setAttribute('placeholder', 'Modeli Duhet te shkruhet!');

    }

    if(pershkrimi.value.trim()===''){
        mesazheGabimi.push('Pershkrimi eshte Obligativ!');
        pershkrimi.style.borderColor='red';
        pershkrimi.classList.add('error');
        pershkrimi.setAttribute('placeholder', 'Pershkrimi eshte Obligativ');

    }
    if(foto.value.trim()===''){
        mesazheGabimi.push('Foto eshte Obligative!');
        foto.style.borderColor='red';
        foto.classList.add('error');
        foto.setAttribute('placeholder', 'Foto eshte Obligative');

    }
    if(cmimi.value.trim()===''){
        mesazheGabimi.push('Cmimi duhet te deklarohet!');
        cmimi.style.borderColor='red';
        cmimi.classList.add('error');
        cmimi.setAttribute('placeholder', 'Cmimi duhet te deklarohet!');

    }


    if(mesazheGabimi.length>0){
        e.preventDefault();
    }
});




