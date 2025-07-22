document.addEventListener("DOMContentLoaded", ()=>{
    const itemTable = document.querySelector('.itemTable')
    let allItem = []

    fetch('/eshop/panel/backend/crud/users/json_users.php')
        .then(response => response.json())
        .then(data => {
            allItem = data
            renderTable(allItem)
        })
        .catch(error => console.log('Fetch error: ', error))

    function renderTable(data){
        itemTable.innerHTML = ''
        data.forEach((item, index) =>{
            const tr = document.createElement('tr')
            tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${item.email}</td>
                <td>${item.full_name}</td>
                <td>${item.username}</td>
                <td>${item.avatar_path && item.avatar_path.trim() !== '' ? 
                    `<img src="/eshop/panel/public/uploads/images/users/${item.avatar_path}" 
                        alt="User Avatar" 
                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">` : 
                    `<div class="avatar-placeholder">No Image</div>`}
                </td>
                <td>${item.is_admin === "1" || item.is_admin === 1 ? 
                    `<span class="status status-active"><i class="bi bi-check-circle-fill"></i><span class="status-text">Yes</span></span>` : 
                    `<span class="status status-inactive"><i class="bi bi-x-circle-fill"></i><span class="status-text">No</span></span>`}
                </td>
                <td>${item.created_at}</td>
                <td>${item.updated_at}</td>
                <td>
                    <button class="btn btn-sm btn-edit" onclick="window.location.href = '/eshop/panel/home/users_table/edit_user?id=${item.user_id}'">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-sm btn-delete" onclick="if(confirm('Are you sure you want to delete this user?')) { window.location.href = '/eshop/panel/home/users_table/delete_user?id=${item.user_id}'; }">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            `
            itemTable.appendChild(tr)
        })
    }
})