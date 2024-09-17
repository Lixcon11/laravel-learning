const dropdown = () => {
    const menu = document.getElementById("menu");
    const cross = document.getElementById("cross");
    const dropdown = document.getElementById("navbar");
    const widthMatch = window.matchMedia("(min-width: 1000px)")

    const isDropdownVisible = answer => {
        if(answer) {
            cross.classList.remove(`none`);
            dropdown.classList.remove(`none`);
            menu.classList.add(`none`);
        }
        else {
            cross.classList.add(`none`);
            dropdown.classList.add(`none`);
            menu.classList.remove(`none`);
        }
    }

    menu.addEventListener("click", () => {
        isDropdownVisible(true);
    });
    cross.addEventListener("click", () => {
        isDropdownVisible(false);
    });
    widthMatch.addEventListener("change", (mm) => {
        
        if (mm.matches) {
            isDropdownVisible(false);
        }
    })
}

export default dropdown;