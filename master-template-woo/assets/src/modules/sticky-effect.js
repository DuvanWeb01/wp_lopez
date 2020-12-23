// Sticky header

const stickyEffect = () =>{
    
    window.onscroll = function (){
        const menu_sticky = document.querySelector('.sticky-header')
        const float_buttons = document.querySelector('.float-buttons')

        let scroll = document.documentElement.scrollTop || document.body.scrollTop;
        
        if(scroll > 300){
            if (menu_sticky) {
                menu_sticky.classList.add('fixed-bottom-header')
            }

            if (float_buttons) {
                float_buttons.classList.add('show-float-buttons')
            }
           
            
        } else if (scroll < 300){
            if (menu_sticky) {
                menu_sticky.classList.remove('fixed-bottom-header')
            }

            if (float_buttons) {
                float_buttons.classList.remove('show-float-buttons')
            }
        }
    }
}


export default stickyEffect;