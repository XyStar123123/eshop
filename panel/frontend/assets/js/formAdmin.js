const signUp = document.getElementById("signUp")
const signIn = document.getElementById("signIn")
const loginForm = document.querySelector('.form-signin')
const signUpForm = document.querySelector('.form-signup')

signUp.addEventListener("click", ()=>{
    loginForm.style.display = "none"
    signUpForm.style.display = "flex"
})
signIn.addEventListener("click", ()=>{
    loginForm.style.display = "flex"
    signUpForm.style.display = "none"
})

