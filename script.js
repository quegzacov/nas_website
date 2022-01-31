for (let i = 0; i < document.getElementsByClassName('file').length; i++) {
    document.getElementsByClassName('file')[i].addEventListener('contextmenu', function(event){
        event.preventDefault();
        document.getElementsByClassName('menu')[i].style.visibility = 'visible';
        document.getElementsByClassName('menu')[i].style.top = event.pageY;
        document.getElementsByClassName('menu')[i].style.left = event.pageX;
    })
}

for (let i = 0; i < document.getElementsByClassName('file').length; i++) {
    document.getElementsByClassName('file')[i].addEventListener('click', function(event){
        document.getElementById('menu').style.visibility[i] = 'hidden';
    })
}