document.addEventListener("DOMContentLoaded", () => {
  const signupForm = document.getElementById("signup-form");
  const loginForm = document.getElementById("login-form");
  const homepageUrl = "../basecode/home.php"; // Ganti dengan URL homepage Anda yang sebenarnya

  // --- Logika untuk Halaman Sign Up ---
  if (signupForm) {
    signupForm.addEventListener("submit", (e) => {
      e.preventDefault(); // Mencegah form submit secara default

      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      // Validasi sederhana: cek apakah ada input kosong
      if (!name || !email || !password) {
        alert("Harap lengkapi semua kolom.");
        return;
      }

      // Simpan data pengguna ke localStorage
      // Menggunakan email sebagai kunci unik
      const userData = {
        name: name,
        password: password,
      };
      localStorage.setItem(email, JSON.stringify(userData));

      alert("Pendaftaran berhasil! Silakan masuk.");
      window.location.href = "signin.php"; // Arahkan ke halaman login setelah sukses
    });
  }

  // --- Logika untuk Halaman Login ---
  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault(); // Mencegah form submit secara default

      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;

      // Ambil data pengguna dari localStorage berdasarkan email
      const storedUserData = localStorage.getItem(email);

      if (storedUserData) {
        const userData = JSON.parse(storedUserData);

        // Verifikasi kata sandi
        if (userData.password === password) {
          alert("Login berhasil! Selamat datang.");
          // **Pindahkan ke homepage setelah login berhasil**
          window.location.href = homepageUrl;
        } else {
          alert("Kata sandi salah. Silakan coba lagi.");
        }
      } else {
        alert("Email tidak ditemukan. Silakan daftar terlebih dahulu.");
      }
    });
  }

  // --- Logika untuk Navigasi Dropdown di Homepage (jika ada) ---
  // Ini adalah kode yang sudah Anda miliki sebelumnya
  const dropdown = document.querySelector(".dropdown");
  if (dropdown) {
    const dropdownContent = document.querySelector(".dropdown-content");
    dropdown.addEventListener("mouseenter", () => {
      dropdownContent.style.display = "block";
    });
    dropdown.addEventListener("mouseleave", () => {
      dropdownContent.style.display = "none";
    });
  }
});
