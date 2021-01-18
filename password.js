const username = document.querySelector('#username');
const pass = document.querySelector('#pass');
const login = document.querySelector('#login');

login.addEventListener('click', (e) => {
    console.log(username.value.trim());

    if (username.value.trim() == "" || pass.value.trim() == "") {
        alert("Please enter 2 full fields");
        
    } else if ((username.value.trim() !== "admin" || pass.value.trim() !== "123456") && (username.value.trim() !== "user" || pass.value.trim() !== "123456"  ) ) {
        alert("Wrong account or password");
        
    } else if ((username.value.trim() == "admin" & pass.value.trim() == "123456") &&(username.value.trim() == "user" & pass.value.trim() == "123456" ) ) {
        login.setAttribute('href','customers.php');
    }
})
