<?php
require 'config/db.php';
$projects = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Fawwaz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-cyan-100 font-sans">

    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-yellow-400">Fawwaz.dev</h1>
            <ul>
                <li><a href="index.php" class="hover:text-pink-400">About</a></li>
                <li><a href="skills.php" class="hover:text-pink-400">Skills</a></li>
                <li><a href="projects.php" class="hover:text-pink-400">Projects</a></li>
                <li><a href="certificates.php" class="hover:text-pink-400">Certificates</a></li>
            </ul>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-10">My Projects</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php while ($p = mysqli_fetch_assoc($projects)): ?>
    <div class="bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-pink-400 transition-all duration-300 hover:scale-105">
        <?php if (!empty($p['gambar'])): ?>
            <img src="<?= $p['gambar'] ?>" alt="<?= $p['judul'] ?>" class="w-full h-48 object-cover">
        <?php else: ?>
            <div class="w-full h-48 flex items-center justify-center bg-slate-700 text-slate-400 italic">
                Tidak ada gambar
            </div>
        <?php endif; ?>
        <div class="p-4">
            <h3 class="text-xl font-semibold mb-2"><?= $p['judul'] ?></h3>
            <p class="text-gray-400 text-sm"><?= $p['deskripsi'] ?></p>
        </div>
    </div>
    <?php endwhile; ?>
</div>

    </main>

    <footer class="bg-gray-800 text-center py-4 text-sm text-gray-400">
        &copy; 2025 Fawwaz. All Rights reserved.
    </footer>
</body>
</html>