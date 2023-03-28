function mostrar(num){
    if(num == 0){
        document.getElementById('uno').style.display = '';
        document.getElementById('dos').style.display = '';
        document.getElementById('tres').style.display = '';
        document.getElementById('cuatro').style.display = '';
        document.getElementById('cinco').style.display = 'none';
        document.getElementById('seis').style.display = 'none';
        document.getElementById('siete').style.display = 'none';
        document.getElementById('ocho').style.display = 'none';
        document.getElementById('nueve').style.display = 'none';
        document.getElementById('diez').style.display = 'none';
        document.getElementById('once').style.display = 'none';
    }
    if(num == 1){
        document.getElementById('uno').style.display = 'none';
        document.getElementById('dos').style.display = 'none';
        document.getElementById('tres').style.display = 'none';
        document.getElementById('cuatro').style.display = 'none';
        document.getElementById('cinco').style.display = '';
        document.getElementById('seis').style.display = '';
        document.getElementById('siete').style.display = '';
        document.getElementById('ocho').style.display = '';
        document.getElementById('nueve').style.display = '';
        document.getElementById('diez').style.display = '';
        document.getElementById('once').style.display = '';
    }
}