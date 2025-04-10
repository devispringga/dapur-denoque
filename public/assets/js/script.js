function validateLogin() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "admin123") {
        alert("Login berhasil!");
        window.location.href = "main.html";
        return false;
    } else {
        alert("Username atau password salah!");
        return false;
    }
}
