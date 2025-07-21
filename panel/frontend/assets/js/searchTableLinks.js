const searchInput = document.getElementById('searchInput')
const sidebarItem = document.querySelectorAll('.sidebar-item')

searchInput.addEventListener("input", ()=>{
    const value = searchInput.value.toLowerCase()
    sidebarItem.forEach(item => {
        if(item.textContent.toLowerCase().includes(value)){
            item.style.display = 'flex'
        }else{
            item.style.display = 'none'
        }
    })
})