const base = '/eshop/panel/'
let url = window.location.pathname

if(url.startsWith(base)){
    url = url.slice(base.length)
}

const parts = url.split('/').filter(p => p)

if (parts.length === 0) {
    document.querySelector('.breadcrumb-container').innerHTML = '<a class="breadcrumb-item muted">Home</a>'
} else {
    const crumbs = parts.map((part, index) => {
        const link = base + parts.slice(0, index + 1).join('/')
        const label = part.replace(/[_-]/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
        const isLast = index === parts.length -1
        return isLast 
            ? `<a class="breadcrumb-item muted">${label}</a>` 
            : `<a href="${link}" class="breadcrumb-item active">${label}</a>`
    })
    
    document.querySelector('.breadcrumb-container').innerHTML = crumbs.join(' > ')
}