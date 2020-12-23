
export const hideClickOut = (menu) => {
    let tag_menu = document.querySelector(menu)

    document.addEventListener('click', function(e) {
        let click = e.target;
        if (tag_menu.classList.contains("show-menu") && click != tag_menu) {
            tag_menu.classList.remove("show-menu")
        }
    }, false)
}

export const buttonsToogle = (buttons) => {
    const buttons_toggle = document.querySelectorAll(buttons);

    for (const button of buttons_toggle) {
        button.addEventListener('click', function(e) {
            e.preventDefault()
            e.stopPropagation();
            
            let box_menu = document.querySelector(this.dataset.target)
    
            if (box_menu.classList.contains("show-menu")) {
                box_menu.classList.remove('show-menu')
            } else {
                box_menu.classList.add('show-menu')
            }   
        })
    }
}
