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