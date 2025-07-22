const fileInput = document.getElementById("fileInput")
const fileNameStore = document.getElementById("fileName")
const fileUploadContainer = document.querySelector('.file-upload')
const validExt = ['png', 'jpg', 'jpeg']

fileInput.addEventListener("change", ()=>{
    const file = fileInput.files[0]

    if(file){
        const parts = file.name.split('.')
        const fileExt = parts[parts.length -1]
        if(!validExt.includes(fileExt)){
            alert('Not valid image extension!')
            fileNameStore.value = ''
            return
        }
        fileNameStore.value = file.name

        if (document.getElementById('removeFile')) {
            fileUploadContainer.insertAdjacentHTML('beforeend', "<i class='bi bi-x remove-file' id='removeFile'></i>")

            document.getElementById('removeFile').addEventListener("click", () => {
                fileInput.value = ''
                fileNameStore.value = ''
                document.getElementById('removeFile').remove()
            })
        }
    }
})