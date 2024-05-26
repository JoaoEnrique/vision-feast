var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    document.querySelectorAll('.svg-food').forEach(element => {
        element.style.filter = "invert(1)"
    });
    document.documentElement.classList.add('dark');
    localStorage.setItem('color-theme', 'dark');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {
    const menu = document.querySelector("nav");
    menu.classList.remove("scrolled-dark");
    menu.classList.remove("scrolled-light");

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.querySelectorAll('.svg-food').forEach(element => {
                element.style.filter = "invert(1)"
            });
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            menu.classList.add("scrolled-dark")
        } else {
            document.querySelectorAll('.svg-food').forEach(element => {
                element.style.filter = "invert(0)"
            });
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            menu.classList.add("scrolled-light")
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            menu.classList.add("scrolled-light")
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            menu.classList.add("scrolled-dark")
        }
    }

});



verify_menu =() =>{
    const menu = document.querySelector("nav");
    const breakpoint = window.matchMedia("(max-width: 768px)");

    function handleScroll() {
        menu.classList.remove("scrolled-dark");
        menu.classList.remove("scrolled-light");

        if (window.scrollY > 50 && breakpoint.matches) {
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light')
                    menu.classList.add("scrolled-light");
                else
                    menu.classList.add("scrolled-dark");
            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    menu.classList.add("scrolled-dark");
                } else {
                    menu.classList.add("scrolled-light");
                }
            }
        }
    }

    window.addEventListener("scroll", handleScroll);
    window.addEventListener("resize", handleScroll); // Para verificar a condição ao redimensionar a janela
}

verify_menu()
document.addEventListener("DOMContentLoaded", verify_menu());


choose_image = (url) =>{
    document.querySelector("#img-open-modal").src = url
}
