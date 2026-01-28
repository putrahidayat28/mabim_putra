function validasi() {
    let username = document.getElementById("Username").value;
    let password = document.getElementById("Password").value;
    let error = document.getElementById("errorMsg");

    if (username === "" || password === "") {
        error.style.display = "block";
        error.innerText = "Username dan Password harus diisi!";
        return false;
    }
    if (password.length < 5) {
        error.style.display = "block";
        error.innerText = "Password minimal 5 karakter!";
        return false;
    }

    return true;
}