var btnpopup = document.getElementById('btnpopup');
var overlay = document.getElementById('overlay');


btnpopup.addEventListener('click',openMoadl);
function openMoadl() {
overlay.style.display='block';
}

var btnclose = document.getElementById('btnclose');
btnclose.addEventListener('click',closeMoadl);
function closeMoadl() {
overlay.style.display='none';
}

