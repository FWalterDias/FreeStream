const cards = document.querySelectorAll('.card');

for(const card of cards){
    card.addEventListener("click", ()=>{
        console.log("clicou");
    });
    console.log(card);
}

console.log(cards);

const links = [{
    tittle: 'billie',
    link: 'https://youtu.be/4xvXrJq9Mdc'
}, 
{
    tittle: 'beyonce',
    link: 'https://youtu.be/eIU8cNW0vXM'
}, 
{
    tittle: 'rosalia',
    link: 'https://youtu.be/WFbvKIEFrCs'
}, 
{
    tittle: 'rbd',
    link: 'https://youtu.be/CkF4zdp1-sI'
}, 
{
    tittle: 'blackpink',
    link: 'https://youtu.be/CkF4zdp1-sI'
}, 
{
    tittle: 'taylor',
    link: 'https://youtu.be/VYttQOuQpow'
}, 
{
    tittle: 'avatar',
    link: 'https://youtu.be/x5pZI-DmtrE'
}, 
{
    tittle: 'sing2',
    link: 'https://youtu.be/gR8fRXRf3Qg'
}, 
{
    tittle: 'megan',
    link: 'https://youtu.be/JcKRaUGJcqY'
}, 
{
    tittle: 'wandinha',
    link: 'https://youtu.be/xvJL6qQ249A'
}, 
{
    tittle: 'qgambit',
    link: 'https://youtu.be/BKSQ4HB455o'
}, 
{
    tittle: 'arcane',
    link: 'https://youtu.be/3MB3OK3Xnvs'
}]