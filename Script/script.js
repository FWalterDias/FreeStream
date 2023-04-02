const main = document.querySelector('#main');
const shows = document.querySelector('.showsAberto');
const cinema = document.querySelector('.cinemaAberto');
const teatro = document.querySelector('.teatroAberto');

function exibeShows(){
    main.style.display = 'none';
    shows.style.display = 'block';
}
function exibeCinema(){
    main.style.display = 'none';
    cinema.style.display = 'block';
}
function exibeTeatro(){
    main.style.display = 'none';
    teatro.style.display = 'block';
}
function voltar(){
    main.style.display = 'grid';
    shows.style.display = 'none';
    cinema.style.display = 'none';
    teatro.style.display = 'none';
}

const modalHome = document.querySelector('#modalHome');
const modalLogin = document.querySelector('#modalLogin');
const modalSingUp = document.querySelector('#modalSingUp');

// function exibeLogin (){
//     modalHome.style.display = 'none';
// }
// function exibeSingUp (){
//     modalHome.style.display = 'none';
//     modalSingUp.style.display = 'block';
    
// }
// function exibeHome (){
//     modalHome.style.display = 'block';
//     modalSingUp.style.display = 'none';
//     modalLogin.style.display = 'none';
// }

