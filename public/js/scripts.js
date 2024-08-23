import SimpleBar from 'simplebar';

new SimpleBar(document.querySelector('.card-body'));

const trs = document.querySelectorAll(".linhaComCoresDiferentes");

  trs.forEach((tr, index) => {
    if ((index + 1) % 2 === 0) {
        tr.style.backgroundColor = "rgba(26, 59, 122, 15%)";
    } else {
        tr.style.backgroundColor = "rgba(255,255,255,10%)";
    }
});