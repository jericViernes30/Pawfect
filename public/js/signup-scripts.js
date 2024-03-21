// Toggle password
function togglePassword(){
    event.preventDefault();
    let password = document.getElementById('pass');
    
    if(password.type === "password"){
        password.type = "text"
    } else {
        password.type = "password"
    }
}

// Toggle repeated password
function toggleRPassword(){
    event.preventDefault();
    let password = document.getElementById('rpass');
    
    if(password.type === "password"){
        password.type = "text"
    } else {
        password.type = "password"
    }
}