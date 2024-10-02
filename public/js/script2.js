



window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// codigo para colorir as cores com base se e par ou impar (usando agora nos colaboradores)

const trs = document.querySelectorAll(".linhaComCoresDiferentes");

trs.forEach((tr, index) => {
    if ((index + 1) % 2 === 0) {
        tr.style.backgroundColor = "rgba(26, 59, 122, 15%)";
    } else {
        tr.style.backgroundColor = "rgba(255,255,255,10%)";
    }
});

const menu = document.getElementById('open_btn')
const collapse = document.getElementsByClassName('collapse')

menu.addEventListener('click', function () {
document.getElementById('sidebar').classList.toggle('open-sidebar');

if (collapse[0].classList.contains('show')) {
    collapse[0].classList.remove('show')
}
else if (collapse[1].classList.contains('show')) {
    collapse[1].classList.remove('show')
}
});


// const btnOs2 = document.getElementById('idMostrar2')
// const btnOs3 = document.getElementById('idMostrar3')
// const btnOs4 = document.getElementById('idMostrar4')
// const os2 = document.getElementById('os2')
// const os3 = document.getElementById('os3')
// const os4 = document.getElementById('os4')

// btnOs2.addEventListener("click", function(event){
//     event.preventDefault()
//     console.log("vai")
//     os2.classList.remove('d-none')
// })


// btnOs3.addEventListener("click", function(event){
//     event.preventDefault()
//     console.log("vai")
//     os3.classList.remove('d-none')
// })

// btnOs4.addEventListener("click", function(event){
//     event.preventDefault()
//     console.log("vai")
//     os4.classList.remove('d-none')
// })


const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
  button.addEventListener('click',   
 () => {
    const targetDivId = button.dataset.target;
    const targetDiv = document.getElementById(targetDivId);   


    // Esconde todas as divs
    const allDivs = document.querySelectorAll('div[id^="div"]');
    allDivs.forEach(div => div.classList.add('hidden'));

    // Mostra a div clicada
    targetDiv.classList.remove('hidden');
  });
});