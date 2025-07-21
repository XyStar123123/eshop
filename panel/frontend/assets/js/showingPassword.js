const password = document.getElementById("password")
const showPassword = document.getElementById("showPassword")
const eyeIcon = document.getElementById("visibleEyeIcon")

showPassword.onclick = () =>{
    if(eyeIcon.classList.contains('bi-eye')){
        eyeIcon.classList.remove('bi-eye')
        eyeIcon.classList.add('bi-eye-slash')
        password.type = 'text'
    }else{
        eyeIcon.classList.remove('bi-eye-slash')
        eyeIcon.classList.add('bi-eye')
        password.type = 'password'
    }
}