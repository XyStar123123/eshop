const itemTable = document.querySelector('.itemTable')
let allItem = []

fetch('/eshop/panel/backend/crud/json_select.php')
    .then(response => response.json())
    .then(data => {
        allItem = data
        renderTable(allItem)
    })
    .catch(error => console.error('Fetch error: ', error))

function renderTable(data){
    const tr = document.createElement('tr')
    data.forEach((index, item) =>{
        tr.innerHTML += `
            <td>${index}</td>
            <td>${item.email}</td>
            <td>${item.full_name}</td>
            <td>${item.username}</td>
            <td><img src="/eshop/panel/public/uploads/images/users/${avatar_path}" 
                                             alt="User Avatar" 
                                             style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"></td>
            <td>${item.is_admin}</td>
            <td>${item.created_at}</td>
            <td>${item.updated_at}</td>
        `
    })
}