const menu = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .flex .navbar');
const boxNumber = document.querySelector('.contact .row form .box-number');
const boxGuests = document.querySelector('.contact .row form .box-guests');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


boxNumber.onkeypress = (e) =>{
    if(e.target.value.length === 10){
        console.log('hello')
        return false
    }  
}

boxGuests.onkeypress = (e) =>{
    if(e.target.value.length === 2){
        console.log('hello')
        return false
    }  
}

/* boxNumber.addEventListener('keyup', (e) =>{
    let parse = parseInt(e.target.value)
    if(this.target.value.length === 10){
        console.log(parse,'Hello')
        return false
    }
    
    console.log(parse)
    return false
}); */