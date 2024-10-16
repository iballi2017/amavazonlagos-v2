import ActiveTabLink from "./active-tab-link.js";
import ContentToggle from "./content-toggle.js";

document.addEventListener('DOMContentLoaded', () => {
    const Init = () => {
        // alert("loaded!");
        main_menu_toggle_handler();
        mobile_menu_toggle_handler();
        dropdown_handler();
        togggle_menu_handler();
        active_user_account_nav_tab();
        active_sidenav_tab();
        password_field_type_toggle();

    }




    /**Main menu toggle handler */
    function main_menu_toggle_handler() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        new ContentToggle(mobileMenuButton, mobileMenu).toggle();
    }


    /**Main menu toggle handler */
    function mobile_menu_toggle_handler() {
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.querySelector('[aria-labelledby="user-menu-button"]');
        new ContentToggle(mobileMenuButton, mobileMenu).toggle();
    }

    /**Dropdown handler */
    function dropdown_handler() {
        const buttons = document.querySelectorAll('[data-dropdown-toggle="dropdown"]');
        for (let i = 0; i < buttons.length; i++) {
            const button = buttons[i];
            new ContentToggle(button, button.nextElementSibling).toggle();
        }
    }


    function togggle_menu_handler() {
        const controls = document.querySelectorAll('.menu-control');
        for (let i = 0; i < controls.length; i++) {
            const control = controls[i];
            const attr = control && control.getAttribute('aria-controls');
            const menu = attr && document.getElementById(attr);
            const classAtt = menu?.getAttribute("class");
            if (classAtt?.includes("slide-left")) {
                new ContentToggle(control, menu).slide_left_toggle();

            } else { new ContentToggle(control, menu).toggle(); }
        }
    }

    /**activate navigation tabs */
    function active_sidenav_tab() {
        new ActiveTabLink("profile")
    }


    /**activate pickup tabs */
    function active_user_account_nav_tab() {
        new ActiveTabLink("schedule")
    }


    function password_field_type_toggle() {

        const password_fields = document.querySelectorAll(".password");
        for (let i = 0; i < password_fields.length; i++) {
            const element = password_fields[i];
            const toggler = element.nextElementSibling;
            toggler.addEventListener('click', () => {
                if (element.type === 'password') { element.type = 'text'; toggler.innerHTML = "Hide" }
                else { element.type = 'password'; toggler.innerHTML = "Show" }
            })

        }
    }

    Init();
})