fetch('/eshop/panel/backend/crud/json_select.php')
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
    .catch(error => console.error('Fetch error: ', error))