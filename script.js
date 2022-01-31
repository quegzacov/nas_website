for (let i = 0; i < document.getElementsByClassName('file').length; i++) {
    document.getElementsByClassName('file')[i].addEventListener('contextmenu', function(event){
        event.preventDefault();
        document.getElementsByClassName('menu')[i].style.display = 'block';
        console.log(event.pageX, event.pageY);
        console.log(event.clientX, event.clientY);
        document.getElementsByClassName('menu')[i].style.top = event.pageY - document.getElementsByTagName('article')[0].offsetTop;
        document.getElementsByClassName('menu')[i].style.left = event.pageX - document.getElementsByTagName('article')[0].offsetLeft;
    })
}

document.addEventListener('click', function(event){
    for (let i = 0; i < document.getElementsByClassName('file').length; i++) {
        document.getElementsByClassName('menu')[i].style.display = 'none';
    }
})