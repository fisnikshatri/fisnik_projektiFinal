const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null){
        messages.push('Username duhet te shkruhet')
    }

    if (password.value.length <= 6){
        messages.push('Passwordi duhet te jete me i madh se 6 karaktere')
    }

    if (password.value.length >= 20){
        messages.push('Passwordi duhet te jete me i shkurte se 20 karaktere')
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})