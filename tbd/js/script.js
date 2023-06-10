document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Validasi username dan password di sini
    // Contoh validasi sederhana
    if (username === "admin" && password === "admin") {
      alert("Login berhasil!");
      // Redirect ke halaman setelah login sukses
      window.location.href = "home.php";
    } else {
      alert("Username atau password salah!");
    }
  });
  