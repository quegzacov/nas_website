for (let i = 0; i < document.getElementsByClassName('file').length; i++) {
    document.getElementsByClassName('file')[i].addEventListener('contextmenu', function(event){
        event.preventDefault();
        document.getElementById('menu').style.visibility = 'visible';
        document.getElementById('menu').style.top = event.pageY;
        document.getElementById('menu').style.left = event.pageX;
    })
    
}

document.addEventListener('click', function(event){
    document.getElementById('menu').style.visibility = 'hidden';

})