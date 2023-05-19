const cards = document.querySelectorAll('.card');

const dialog = document.querySelector('dialog');
const modalTitle = document.querySelector('.modal-tittle');
const buttonCloseModal = document.querySelector('.dialog button');

const srcInframe = document.querySelector('iframe');


const links = [{
    id: 'billie',
    tittle: 'Happier Then Ever Tour',
    link: 'https://www.youtube.com/embed/4xvXrJq9Mdc'
},
{
    id: 'beyonce',
    tittle: 'Renaissance Tour',
    link: 'https://www.youtube.com/embed/eIU8cNW0vXM'
},
{
    id: 'rosalia',
    tittle: 'Motomami Tour',
    link: 'https://www.youtube.com/embed/WFbvKIEFrCs'
},
{
    id: 'rbd',
    tittle: 'Soy Rebelde Tour',
    link: 'https://www.youtube.com/embed/CkF4zdp1-sI'
},
{
    id: 'blackpink',
    tittle: 'Born Pink Tour',
    link: 'https://www.youtube.com/embed/nxs0RHpT_Hg'
},
{
    id: 'taylor',
    tittle: 'The Eras Tour',
    link: 'https://www.youtube.com/embed/HMI4RgugWL0'
},
{
    id: 'avatar',
    tittle: 'Avatar 2: O Caminho da Água',
    link: 'https://www.youtube.com/embed/x5pZI-DmtrE'
},
{
    id: 'sing2',
    tittle: 'Sing 2',
    link: 'https://www.youtube.com/embed/bop6iS7m3tg'
},
{
    id: 'megan',
    tittle: 'M E G A N',
    link: 'https://www.youtube.com/embed/JcKRaUGJcqY'
},
{
    id: 'wandinha',
    tittle: 'WANDINHA',
    link: 'https://www.youtube.com/embed/Aq0dmBDEFDI'
},
{
    id: 'qgambit',
    tittle: 'O Gambito da Rainha',
    link: 'https://www.youtube.com/embed/BKSQ4HB455o'
},
{
    id: 'arcane',
    tittle: 'Arcane',
    link: 'https://www.youtube.com/embed/3MB3OK3Xnvs'
}];

for (const card of cards) {
    card.addEventListener("click", () => {
        for(const title of links){
            if(card.className.includes(title.id)){
                modalTitle.textContent = title.tittle;
                srcInframe.src = title.link;
            }
        }
        dialog.showModal();
    });
}

buttonCloseModal.addEventListener('click', (event)=>{
    event.stopPropagation();
    dialog.close();
});
