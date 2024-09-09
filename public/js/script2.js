



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
