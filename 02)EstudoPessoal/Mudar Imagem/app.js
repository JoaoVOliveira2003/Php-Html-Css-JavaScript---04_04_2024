const reviews = [
    {
        id: '1',
        name: 'Pessoa 01',
        job: 'trabalho 01',
        img: 'https://www.course-api.com/images/people/person-1.jpeg',
        text: "texto 01",
    },
    {
        id: '2',
        name: 'Pessoa 02',
        job: 'trabalho 02',
        img: 'https://www.course-api.com/images/people/person-2.jpeg',
        text: "texto 03",
    },
    {
        id: '3',
        name: 'Pessoa 03',
        job: 'trabalho 03',
        img: 'https://www.course-api.com/images/people/person-3.jpeg',
        text: "texto 03",
    },
    {
        id: '4',
        name: 'Pessoa 04',
        job: 'trabalho 04',
        img: 'https://www.course-api.com/images/people/person-4.jpeg',
        text: "texto 04",
    },
];

const img = document.getElementById('person-img');
const author = document.getElementById('author');
const job = document.getElementById('job');
const info = document.getElementById('info');

const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const randomBtn = document.querySelector('.random-btn');

let currentItem = 0;

window.addEventListener('DOMContentLoaded', function () {
    const item = reviews[currentItem];
    img.src = item.img;
    author.textContent = item.name;
    job.textContent = item.job;
    info.textContent = item.text;
});

function showPerson(person) {
    const item = reviews[person];
    img.src = item.img;
    author.textContent = item.name;
    job.textContent = item.job;
    info.textContent = item.text;
}

nextBtn.addEventListener('click', function () {
    currentItem++;
    if (currentItem > reviews.length - 1) {
        currentItem = 0;
    }
    showPerson(currentItem);
});

prevBtn.addEventListener('click', function () {
    currentItem--;
    if (currentItem < 0) {
        currentItem = reviews.length - 1;
    }
    showPerson(currentItem);
});

randomBtn.addEventListener('click', function () {
    currentItem = Math.floor(Math.random() * reviews.length);
    showPerson(currentItem);
});
