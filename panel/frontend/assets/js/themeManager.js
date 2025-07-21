const themeDropdown = document.getElementById('themeDropdownBtn')
const themeDropdownMenu = document.querySelector('.theme-dropdown-menu')
const body = document.body
let currentTheme = ''

themeDropdown.onclick = () =>{
    themeDropdownMenu.classList.toggle('active')
}

function show(string){
    themeDropdown.value = string
    currentTheme = string
}

function changeTheme(){
    body.dataset.theme = currentTheme.toLocaleLowerCase()
}