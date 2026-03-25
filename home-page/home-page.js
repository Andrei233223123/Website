document.addEventListener('DOMContentLoaded', function (event) {

    const navItems = document.querySelectorAll('.nav-component > div');

    navItems.forEach(item => {
        item.addEventListener('click', (e) => {
            navItems.forEach(el => el.classList.remove('toggle'));

            item.classList.add('toggle');
        })
    })

    const nav_vh = document.getElementById('nav');
    const main_vh = document.getElementById('card-comp');


    function updateMargin() {
        if (window.innerHeight > 776) {
            nav_vh.style.marginBottom = '40vh';
            main_vh.style.maxHeight = '70vh'
        }
        else if (window.innerHeight <= 776) {
            nav_vh.style.marginBottom = '20vh';
            main_vh.style.maxHeight = '57vh'
        }
    }
    updateMargin();

    window.addEventListener('resize', updateMargin);

    const menu = document.getElementById('hamburger');
    const hamburger = document.querySelector('.aside');
    const main = document.querySelector('.px2');
    menu.addEventListener('click', () => {
        hamburger.classList.add('event');
        main.classList.add('event');


    })

})