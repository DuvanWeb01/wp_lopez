import $ from "jquery"
import "./../node_modules/bootstrap/js/dist/modal"
import { log } from "handlebars";
import stickyEffect from "./modules/sticky-effect"
import SmoothScroll from "smooth-scroll"
import { hideClickOut, buttonsToogle } from './modules/button-toggle'

import "./style/main.sass"


const scroll = new SmoothScroll('.ancle, .menu-item a, #back-to-top', {
    speed: 1000
});

stickyEffect()

buttonsToogle('.button-menu-toggle')
hideClickOut('#box-menu-lateral')
hideClickOut('.box-menu-nav-mobile')


//POP UP MODAL
const popup_modal = document.getElementById('popup-modal');

if (popup_modal) {
    const time_show = popup_modal.dataset.time;
    setTimeout(function(){ 
        popup_modal.classList.add('show-modal');
    
    }, time_show); 

    const button_close = popup_modal.querySelector('.close-popup')

    button_close.addEventListener('click', function(e) {
        e.preventDefault();

        popup_modal.classList.remove('show-modal')
    })
}