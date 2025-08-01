<?php
require 'config/db.php';

// Ambil data dari database
$certs = mysqli_query($conn, "SELECT * FROM certificates ORDER BY tahun DESC LIMIT 3");
$projects = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC LIMIT 3");
$skills = mysqli_query($conn, "SELECT * FROM skills ORDER BY persen DESC LIMIT 3");

function warnaSkill($level) {
    return match(strtolower($level)) {
        'beginner' => 'bg-red-400',
        'intermediate' => 'bg-yellow-400',
        'advanced' => 'bg-green-400',
        default => 'bg-purple-400'
    };
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>Portofolio - Fawwaz</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-900 text-cyan-100 font-sans">

        <nav class="bg-gray-800 p-4 shadow-md">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold text-yellow-400">Fawwaz.dev</h1>
                <ul class="flex gap-4">
                    <li><a href="index.php" class="hover:text-pink-400">About</a></li>
                    <li><a href="skills.php" class="hover:text-pink-400">Skills</a></li>
                    <li><a href="projects.php" class="hover:text-pink-400">Projects</a></li>
                    <li><a href="certificates.php" class="hover:text-pink-400">Certificates</a></li>
                    <li><a href="login.php" class="text-sm bg-purple-600 hover:bg-pink-500 text-white px-3 py-1 rounded transition">
                        Login 👤
                    </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="container mx-auto px-6 py-16">
            <div class="text-center">
                <img src="assets/img/profile.JPG" alt="Foto CEO" class="mx-auto rounded-full w-40 h-40 object-cover border-4 border-yellow-400 mb-6">
                <h2 class="text-3xl font-bold mb-2">Hi, Saya Fawwaz 👋</h2>
                <p class="text-gray-300 max-w-xl mx-auto leading-relaxed">
                    Saya adalah Siswa SMK-IT As-Syifa Boarding School Jalancagak
                </p>
            </div>

            <section class="mt-16 text-center">
                <h3 class="text-2xl font-semibold text-pink-400 mb-4">Sedikit Cerita</h3>
                <p class="text-gray-300 max-w-2xl mx-auto">
                    Sejak mengenal dunia coding, saya merasa seperti menemukan dunia baru. Saya suka belajar HTML, CSS, dan Tailwind. Bahkan pernah bikin sistem kas angkatan sendiri!
                    Portofolio ini adalah bagian dari misi saya untuk terus berkembang jadi web developer masa depan 😎
                </p>
            </section>

<section id="certificates" class="container mx-auto mb-20">
    <h2 class="text-3xl font-bold text-center mb-6 glow-text">Certificates</h2>

    <?php while ($c = mysqli_fetch_assoc($certs)): ?>
    <div class="bg-slate-800 p-4 rounded-lg shadow-md w-full max-w-md mx-auto mb-4">
        <img src="<?= $c['gambar'] ?>" alt="Certificate" class="rounded-md mb-3 h-48 w-full object-cover">
        <h3 class="text-lg font-semibold"><?= $c['nama'] ?></h3>
        <p class="text-sm text-gray-400"><?= $c['tahun'] ?></p>
    </div>
    <?php endwhile; ?>

    <div class="text-center mt-4">
        <a href="certificates.php" class="text-pink-400 hover:underline">Lihat Semua Sertifikat →</a>
    </div>
</section>


<section id="projects" class="container mx-auto mb-20">
    <h2 class="text-3xl font-bold text-center mb-6 glow-text">Projects</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <?php while ($p = mysqli_fetch_assoc($projects)): ?>
        <div class="bg-gray-800 p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold"><?= $p['judul'] ?></h3>
            <p class="text-sm text-gray-400"><?= $p['deskripsi'] ?></p>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="text-center mt-4">
        <a href="projects.php" class="text-pink-400 hover:underline">Lihat Semua Project</a>
    </div>
</section>


<section id="skills" class="max-w-2xl mx-auto mb-20">
    <h2 class="text-3xl font-bold text-center mb-10 glow-text">My Skills</h2>

    <div class="space-y-6">
        <?php while ($s = mysqli_fetch_assoc($skills)): ?>
        <div>
            <h3 class="text-lg font-semibold"><?= $s['nama_skill'] ?></h3>
            <div class="w-full bg-slate-700 rounded-full h-4">
                <div class="<?= warnaSkill($s['level']) ?> h-4 rounded-full" style="width: <?= $s['persen'] ?>%;"></div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="text-center mt-6">
        <a href="skills.php" class="text-pink-400 hover:underline">Lihat Semua Skill</a>
    </div>
</section>

        </main>

        <footer class="bg-gray-800 text-center py-4 text-sm text-gray-400">
            <p>&copy; 2025 Fawwaz. All rights reserved</p>
            <p><a href="login.php" class="text-pink-400 hover:underline">Login 👤</a></p>
    </body>
</html>