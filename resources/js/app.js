import './bootstrap';
const Main_menu_btn = document.getElementById("menu-btn");

const menu = document.getElementById("menu");

/*Hamburger Function */
if (Main_menu_btn != null) {
    Main_menu_btn.addEventListener("click", function()
    {
        navToggle()
    })
}
if (Main_menu_btn != null) {
    Main_menu_btn.addEventListener("click", function()
    {
        navToggle()
    })
}
const menuOverlay = document.getElementById("menu-overlay");

/* Hamburger & Sidebar Logic */
if (Main_menu_btn != null) {
    Main_menu_btn.addEventListener("click", function() {
        navToggle();
    });
}

if (menuOverlay != null) {
    menuOverlay.addEventListener("click", function() {
        navToggle();
    });
}

function navToggle() {
    Main_menu_btn.classList.toggle("open");
    
    // Slide Sidebar
    if (menu.classList.contains("translate-x-full")) {
        menu.classList.replace("translate-x-full", "translate-x-0");
        document.body.classList.add("overflow-hidden");
    } else {
        menu.classList.replace("translate-x-0", "translate-x-full");
        document.body.classList.remove("overflow-hidden");
    }

    // Toggle Overlay
    if (menuOverlay.classList.contains("opacity-0")) {
        menuOverlay.classList.remove("opacity-0", "pointer-events-none");
        menuOverlay.classList.add("opacity-100", "pointer-events-auto");
    } else {
        menuOverlay.classList.remove("opacity-100", "pointer-events-auto");
        menuOverlay.classList.add("opacity-0", "pointer-events-none");
    }
}


