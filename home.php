<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CodeCamp</title>
    <link rel="stylesheet" href="stylez.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="Logo codecamp.png" alt="CodeCamp Logo">
            <span>CodeCamp</span>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">CV</a></li>
            <li><a href="#">Kelas</a></li>
            <li><a href="#">Komunitas</a></li>
        </ul>
        <div class="auth-buttons">
            <button class="login"><a href="login.php"> Login </a> </button>
            <button class="register"><a href="register.php"> Register </a> </button>
            <button class="logout" style="display: none;">Logout</button> <!-- Akan tampil jika user login -->
        </div>
    </nav>

    <!-- About Us -->
    <section class="about-us">
        <div class="about-content">
            <div class="about-text">
                <h2>Apa Itu CodeCamp?</h2>
                <p>CodeCamp adalah platform pembelajaran pemrograman interaktif yang dirancang untuk semua level, mulai dari pemula hingga profesional.</p>
                <p>Kami menyediakan kelas online, proyek langsung, serta komunitas yang mendukung untuk mempercepat perkembangan karier di dunia teknologi.</p>
                <p>Belajar coding dengan cara yang menyenangkan dan efektif bersama mentor terbaik di bidangnya.</p>
                <button class="get-started">Get Started</button>
            </div>
            <div class="about-image">
                <img src="about-image.jpg" alt="Belajar di CodeCamp">
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section class="layanan">
        <h2>Layanan Kami</h2>
        <div class="layanan-container">
            <div class="layanan-box">
                <img src="cv-icon.png" alt="CV Icon">
                <h3>CV</h3>
                <p>Buat CV profesional dengan mudah dan menarik untuk meningkatkan peluang kerja.</p>
            </div>
            <div class="layanan-box">
                <img src="kelas-icon.png" alt="Kelas Icon">
                <h3>Kelas</h3>
                <p>Belajar dari mentor terbaik dalam berbagai kelas pemrograman yang interaktif.</p>
            </div>
            <div class="layanan-box">
                <img src="komunitas-icon.png" alt="Komunitas Icon">
                <h3>Komunitas</h3>
                <p>Bergabunglah dengan komunitas pengembang dan kembangkan jaringan Anda.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="testimoni">
        <h2>Testimoni</h2>
        <div class="testimoni-container">
            <div class="testimoni-box">
                <p>"CodeCamp benar-benar membantu saya memahami pemrograman dengan lebih baik!"</p>
                <span>- Andi, Mahasiswa</span>
            </div>
            <div class="testimoni-box">
                <p>"Kelasnya sangat interaktif dan mudah dipahami, cocok untuk pemula."</p>
                <span>- Siti, Web Developer</span>
            </div>
            <div class="testimoni-box">
                <p>"Bergabung dengan komunitas di CodeCamp membuat saya lebih semangat belajar!"</p>
                <span>- Budi, UI/UX Designer</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 CodeCamp. All Rights Reserved.</p>
        <p>📞 0812-3456-7890 | 📧 support@codecamp.com</p>
    </footer>

</body>
</html>
