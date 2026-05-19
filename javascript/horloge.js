let heure = document.querySelector('#heure');
let minute = document.querySelector('#minute');
let jour = document.querySelector('#jour')
let mois = document.querySelector('#mois')
let annee = document.querySelector('#annee')


setInterval(() => {
let time = new Date();

heure.innerHTML = (time.getHours() < 10?"0":"") + time.getHours();
minute.innerHTML = (time.getMinutes() < 10?"0":"") + time.getMinutes();

jour.innerHTML = (time.getDate() < 10 ? "0":"") + time.getDate();
mois.innerHTML = (time.getMonth() + 1 < 10 ? "0" : "") + (time.getMonth() + 1);
annee.innerHTML = time.getFullYear().toString().slice(-2);
}, 10);



// var date = new date();
// console.log(date.getDate(),'/',date.getMonth(),'/', date.getYear());